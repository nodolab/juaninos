

<div class="row">

	<div class="col-sm-10 col-sm-offset-1">

		<form action="https://hoteljuaninos.gabsuite.com/rooms.php?check_in=llegada&check_out=salida" method="GET" target="_blank">
			<div class="col-sm-4">
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" style="margin-top: 2em" type="text" id="datepicker" name="check_in" min="<?php echo date("d-m-Y", strtotime("+1 day"));?>" value="<?php echo date("d-m-Y", strtotime("+1 day"));?>" required />
					<label class="input__label input__label--hoshi " for="llegada">
						<span class="input__label-content input__label-content--hoshi">Fecha de llegada</span>
					</label>
				</span>
			</div>
			<div class="col-sm-4">
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" style="margin-top: 2em" type="text" id="datepickerone" name="check_out" min="<?php echo date("d-m-Y", strtotime("+2 day"));?>" value="<?php echo date("d-m-Y", strtotime("+2 day"));?>" required />
					<label class="input__label input__label--hoshi " for="salida">
						<span class="input__label-content input__label-content--hoshi">Fecha de salida </span>
					</label>
				</span>
			</div>
			<div class="col-sm-4">
				<button type="submit" class="btn-form btn-cta" style="width: 100%; border: 0; margin-top: 47px; cursor: pointer;">Buscar disponibilidad</button>
			</div>
		</form>

	</div>

</div>