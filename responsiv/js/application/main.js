



//Initialiser fastclick

$(document).ready(function() {
 	FastClick.attach(document.body);
	document.addEventListener('deviceready', onDeviceReady, false);
 });

 
//Deviceready-eventlistener for å være sikker på at cordova er fullt lastet
function onDeviceReady() {
	document.addEventListener('backbutton', onBackKeyDown , false);
	navigator.splashscreen.hide();
	//sett devicePlatform-flagget på window-objektet
	window.devicePlatform=device.platform;
	//Hvis Android, så lar vi inputfeltene være tekstfelt for å unngå tull med numerisk keyboard
	if(window.devicePlatform==='Android')
	{
		$('#moisture').attr('type','text');
		$('#weight').attr('type','text');
		$('#price').attr('type','text');
		$('#efficiency').attr('type','text');
	}
}
 
//Initialiser validator
$.validator.setDefaults({
//Håndter suksessrik validering av skjemaet (dvs. regn ut kostnad/kwh)
	submitHandler: function(form) { 
		if(form.id==="woodForm")
		{
			//Regn ut kostnad/kwh
			var moisture = Number($("#moisture").val());
			var weight = Number($("#weight").val());
			var woodPrice = Number($("#price").val());
			var efficiencyCoefficient = Number($("#efficiency").val()/100);
			var usefulEnergyAmount = Math.round(getUsefulEnergyContent(weight, moisture, efficiencyCoefficient));
			var pricePerKwh = Math.round(getPricePerKwh(weight, moisture, efficiencyCoefficient, woodPrice));
			
			$("#energyAmountHeading").html("Nyttbar energi:");
			$("#energyAmountResult").html(usefulEnergyAmount);
			$("#energyAmountUnit").html(" kWh");
			$("#woodCalculationHeading").html("Effektiv vedkostnad:");
			$("#woodCalculationResult").html(pricePerKwh);
			$("#woodCalculationUnit").html(" øre/kWh");
			
		}
		else if(form.id==="electricityForm")
		{
			//Regn ut mengde ved
			var moisture = Number($("#moisture_2").val());
			var electricityPrice = Number($("#electricityPrice").val());
			var saveAmount = Number($("#saveAmount").val());
			var efficiencyCoefficient = Number($("#efficiency_2").val()/100);
			var woodSubstituteAmount = Math.round(getWoodSubstituteAmount(saveAmount, electricityPrice, moisture, efficiencyCoefficient));
			$("#electricityCalculationHeading").html("Mengde ved:");
			$("#electricityCalculationResult").html(woodSubstituteAmount);
			$("#electricityCalculationUnit").html(" kg");
		}
	}
});

$().ready(function() {
	// Validering av skjemaene
	$("#woodForm").validate({
			focusInvalid: false,
			onkeyup: false,
			onfocusout: false,
			onclick: false,
		rules: {
			moisture: {
				required: true,
				min: 0,
				max: 100
			},
			weight: {
				required: true,
				min: 0.0000000001
			},
			price: {
				required: true,
				min: 0.0000000001
			},
			efficiency: {
				required: true,
				min: 0.0000000001,
				max: 100
			}
		},
		messages: {
			moisture: {
				required: "Oppgi fuktighet i % for veden",
				min: "Må være større enn eller lik 0",
				max: "Må være mindre enn eller lik 100"
			},
			weight: {
				required: "Oppgi vekt i kg for veden",
				min: "Må være større enn 0"
			},
			price: {
				required: "Oppgi prisen betalt for veden",
				min: "Må være større enn 0"
			},
			efficiency: {
				required: "Oppgi virkningsgrad i % for vedovnen",
				min: "Må være større enn 0",
				max: "Må være mindre enn 100"
			}
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				validator.errorList[0].element.focus(); //Set Focus
			}
		},
        errorPlacement: function(error, element) {
            $(element).attr('data-content',  error[0].innerHTML);
			$(element).attr('data-placement','right');
			
            $(element).popover('show');
		},
		success: function(label, element) {
			$(element).popover('destroy');
		}
	});
	
	$("#electricityForm").validate({
		focusInvalid: false,
		onkeyup: false,
		onfocusout: false,
		onclick: false,
		rules: {
			moisture_2 : {
				required: true,
				min: 10,
				max: 30
			},
			electricityPrice: {
				required: true,
				min: 0.0000000001
			},
			saveAmount: {
				required: true,
				min: 0.0000000001
			},
			efficiency_2: {
				required: true,
				min: 0.0000000001,
				max: 100
			}
		},
		messages: {
			moisture_2: {
				required: "Oppgi fuktighet i % for veden",
				min: "Må være større enn eller lik 10",
				max: "Må v&ære mindre enn eller lik 30"
			},
			electricityPrice: {
				required: "Oppgi strømpris i øre/kWh",
				min: "Må være større enn 0"
			},
			saveAmount: {
				required: "Oppgi ønsket sparebeløp i kr",
				min: "Må være større enn 0"
			},
			efficiency_2: {
				required: "Oppgi virkningsgrad i % for vedovnen",
				min: "Må være større enn 0",
				max: "Må være mindre enn 100"
			}
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				validator.errorList[0].element.focus(); //Set Focus
			}
		},
        errorPlacement: function(error, element) {
            $(element).attr('data-content',  error[0].innerHTML);
			$(element).attr('data-placement','right');
			$(element).attr('data-title', 'Feil!');
            $(element).popover('show');
		},
		success: function(label, element) {
			$(element).popover('destroy');
		}
	});
});

//Utility functions
		
function getPricePerKwh(weight, moisture, efficiencyCoefficient, woodPrice)
{
	//Returnerer prisen i øre/kWh for veden som koster woodPrice kr, har vekt weight (kg), fuktighet moisture (100*%) som kWh og brennes i vedovnen med virkningsgrad efficiencyCoefficient
	return 100*woodPrice/getUsefulEnergyContent(weight, moisture, efficiencyCoefficient);
}

function getEnergyContentPerKg(moisture)
{
	//Returnerer energiinnhold per kg ved (kWh/kg) i veden som har fuktighet moisture (100*%) 
	return (5.32-(0.06*(100*moisture)/(100+moisture)));
}

function getUsefulEnergyContentPerKg(moisture, efficiencyCoefficient)
{
	//Returnerer nyttbart energiinnhold per kg ved (kWh/kg) i veden som har fuktighet moisture (100*%) og som brennes i vedovnen med virkningsgrad efficiencyCoefficient
	return efficiencyCoefficient*getEnergyContentPerKg(moisture);
}

function getUsefulEnergyContent(weight, moisture, efficiencyCoefficient)
{
	//Returnerer nyttbart energiinnhold i veden (kWh) som har vekt weight (kg) og fuktighet moisture (100*%) som kWh og brennes i vedovnen med virkningsgrad efficiencyCoefficient
	return efficiencyCoefficient*getEnergyContent(weight, moisture);
}

function getEnergyContent(weight, moisture)
{
	//Returnerer energiinnholdet i veden som har vekt weight (kg) og fuktighet moisture (100*%) som kWh
	return weight*(5.32-(0.06*(100*moisture)/(100+moisture)));
}

function getWoodSubstituteAmount(saveAmount, electricityPrice, moisture, efficiencyCoefficient)
{
	//Returnerer vekten i kg av veden (som har fuktighet moisture (100*%) og brennes i ovnen med virkningsgrad efficiencyCoefficient (%)) man må skaffe for å få erstatte en mengde strøm som koster electricityPrice (øre/kWh) for totalt saveAmount kr.
	var energyAmount = 100*(saveAmount/electricityPrice);
	return energyAmount/getUsefulEnergyContentPerKg(moisture, efficiencyCoefficient);
}

function onBackKeyDown() {
	if(anyModalsShown())
	{
		$('#moisture_information_modal').modal('hide');
		$('#weight_information_modal').modal('hide');
		$('#price_information_modal').modal('hide');
		$('#efficiency_information_modal').modal('hide');
		$('#wood_calculator_information_modal').modal('hide');
	}
	else
	{
		navigator.app.exitApp();
	}
}

function anyModalsShown()
{
	try
	{
		if($('#wood_calculator_information_modal').data()['bs.modal'].isShown)
		{
			return true;
		}
	}
	catch(exception)
	{
	}
	try
	{
		if($('#moisture_information_modal').data()['bs.modal'].isShown)
		{
			return true;
		}
	}
	catch(exception)
	{
	}
	try
	{
		if($('#weight_information_modal').data()['bs.modal'].isShown)
		{
			return true;
		}
	}
	catch(exception)
	{
	}
	try
	{
		if($('#price_information_modal').data()['bs.modal'].isShown)
		{
			return true;
		}
	}
	catch(exception)
	{
	}
	try
	{
		if($('#efficiency_information_modal').data()['bs.modal'].isShown)
		{
			return true;
		}
	}
	catch(exception)
	{
	}
	return false;
}

function openWebPage(url)
{
	if(window.devicePlatform==='iOS')
	{
		window.open(url,'_blank','location=yes');
	}
	else
	{
		window.open(url,'_system','location=yes')
	}
}