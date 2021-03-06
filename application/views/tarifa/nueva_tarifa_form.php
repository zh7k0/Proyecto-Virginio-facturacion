<form id="nuevoServicioForm" class="form hidden" method="post" action="<?php echo base_url().'tarifas/guardar_tarifa';?>">
    <input type="hidden" name="rut" value="<?php echo $rut;?>">
    <div class="form__field">
        <label for="servicio">Servicio</label>
        <select name="servicio" id="servicios">
        <?php if(isset($servicios)):?>
            <?php foreach ($servicios as $servicio):?>
        <option value="<?php echo $servicio->tipo_servicio;?>"><?php echo $servicio->tipo_servicio;?></option>
            <?php endforeach;?>
        <?php else:?>
        <option value="0">No hay servicios disponibles</option>
        <?php endif;?>
        </select>
        <div class="form__field">
            <label for="">Monto a cobrar</label>
            <input type="number" name="monto_tarifa" id="monto_tarifa" min="1" required>
        </div>
        <div class="form__field">
            <label for="">Variabilidad de cobro específica</label>
            <input type="number" name="rango_cobros" id="rango_cobros" min="0" max="100">
        </div>
    </div>
    <button class="btn">Guardar</button>
</form>
<div id="mensaje"></div>
