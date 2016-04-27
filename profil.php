<?php include 'loggedincheck.php'; ?>
<div class="tab-pane" id="profil">
	<div class="row">
		<div class="span12">
			<div class="well well-large">
				<form class="form-horizontal" id="medlemsregistrering" name="registrering" method="POST" action="medlemsupdate.php?data=<?php echo $data.'&sign='.$sign?>}" >
				<div class="row">
					<div class="row">
						<div class="span1">
						</div>
						<div class="span10">
							<legend>Din profil</legend>
						</div>
					</div>
					<div class="row">
					<div class="span11">
						<div class="span1">
						</div>
						<div class="span6">
							<p class="lead">Dette er din profil, med informasjonen du har lagret om deg selv.</p>
							<p class="lead">Er noe av informasjonen feil eller utdatert, vær vennlig å oppdatere denne.</p>
							<br>
							<br>
							<div class="span3">
								<?php include 'quotes.php' ?>
							</div>
						</div>
						<div class="span3">
								<div class="control-group">
									<label>Fornavn</label>
									<input type="text" name="navn" id="navn1" value="<?php echo utf8_encode($_SESSION['info']['navn']); ?>">
								</div>
								<div class="control-group">
									<label>Etternavn</label>
									<input type="text" name="etternavn" id="etternavn1" value="<?php echo utf8_encode($_SESSION['info']['etternavn']); ?>">
								</div>
								<div class="control-group">
									<label>Telefonnummer</label>
									<input type="text" name="telefonnummer" id="telefonnummer1" value="<?php echo $_SESSION['info']['telefonnummer']; ?> ">
								</div>
								<div class="control-group">
									<label>Brukernavn</label>
									<input class="uneditable-input" value="<?php echo $_SESSION['info']['brukernavn']; ?>" name="brukernavn" value="brukernavn">
								</div>
								<div class="control-group">
									<label>Studmail</label>
									<div class="input-append">
										<span class="uneditable-input"><?php echo $_SESSION['info']['brukernavn']; ?></span>
										<span class="add-on">@stud.ntnu.no</span>
									</div>
								</div>
								<div class="control-group">
									<label>E-mail</label>
									<div class="input-append">
										<input type="text" name="epost" id="epost1" value="<?php echo $_SESSION['info']['epost']; ?> ">
									</div>
								</div>
								<div class="control-group">
									<label>Ditt avgangsår</label>
									<select id="avgangsar" name="avgangsar">
										<option><?php echo $_SESSION['info']['avgangsaar']; ?></option>
										<option>2010</option>
										<option>2011</option>
										<option>2012</option>
										<option>2013</option>
										<option>2014</option>
										<option>2015</option>
										<option>2016</option>
										<option>2017</option>
										<option>2018</option>
									</select>
								</div>
								<div class="control-group">
									<label>Arbeidsgiver</label>
									<input type="text" name="arbeidsgiver" id="arbeidsgiver" <?php if($_SESSION['info']['arbeidsgiver']){ echo "value='";
									echo utf8_encode($_SESSION['info']['arbeidsgiver']); echo "'";} else {echo "placeholder='Arbeidsgiver'";} ?>>
								</div>
								<div class="control-group">
									<label class="checkbox">
										<p>Hak av om du ikke lenger anser deg som medlem av Verdi, og er alumni<input type="checkbox" value="Ja" id="alumni" name="alumni"></p>
									</label>
								</div>
								<input type="hidden" name="data" id="data1" value="<?php echo $data; ?>">
								<button type="submit" class="btn">Oppdater</button>
						</div>
						</div>
					</div> <!-- /span12 -->
				</div> <!-- /row -->
				</form>
			</div>
		</div> <!-- /span12 -->
	</div> <!-- /row -->
</div> <!-- /tab pane -->
