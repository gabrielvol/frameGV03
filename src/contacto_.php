<?php
    $int = 1;
    $hasMandatoryMsg = 1;
    $title = "Contacto | PáginaSinTítulo";
    //$titleEN = "Contact | UntitledPage";
    $mdesc = "";
    
    $navCurrent = 0;
    
    //Gettext variable, debe ir antes del head
    $idioma = $_GET['l'];
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.inc.php');
?>
<link href="/nuevo/_source/css/datepicker.css" rel="stylesheet">
<script src="/nuevo/_source/js/jquery-ui-datepicker.js"></script>
</head>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
	<div id="main" class="int contacto" role="main">
            <div class="mobileForm tabletForm">
            <?php // include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/formSend.inc.php'); ?>
            <form method="post">
                <?php
                    echo $status;
                    
                    if($hasMandatoryMsg == 1) {
                        echo '<div class="mandatoryMsg '.$mandatoryMsgClasses.'">'.$mandatoryMsg.'</div>';
                    }
                ?>
                
                <label for="nombre">
                    <span class="labelName"><?php echo _('Nombre'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su nombre'); ?>.</span>
                    <input type="text" name="nombre" id="nombre" class="nombre <?php echo $invalidFieldNombre ?>" value="<?php echo $_POST['nombre']; ?>" placeholder="<?php echo _('Ingrese su nombre'); ?>" <?php echo $autofocusNombre ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassNombre ?>"><?php echo $errorBelowInputNombre ?></span>               
                </label>
                
                <label for="apellido">
                    <span class="labelName"><?php echo _('Apellido'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su apellido'); ?>.</span>
                    <input type="text" name="apellido" id="apellido" class="apellido <?php echo $invalidFieldApellido ?>" value="<?php echo $_POST['apellido']; ?>" placeholder="<?php echo _('Ingrese su apellido'); ?>" <?php echo $autofocusApellido ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassApellido ?>"><?php echo $errorBelowInputApellido ?></span>             
                </label>
                
                <label for="nombreApe">
                    <span class="labelName"><?php echo _('Nombre y Apellido'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su nombre y apellido'); ?>.</span>
                    <input type="text" name="nombreApe" id="nombreApe" class="nombreApe <?php echo $invalidFieldNombreApe ?>" value="<?php echo $_POST['nombreApe']; ?>" placeholder="<?php echo _('Ingrese su nombre y apellido'); ?>" <?php echo $autofocusNombreApe ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassNombreApe ?>"><?php echo $errorBelowInputNombreApe ?></span>             
                </label>
                
                <label for="direccion">
                    <span class="labelName"><?php echo _('Direcci&oacute;n'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su direcci&oacute;n'); ?>.</span>
                    <input type="text" name="direccion" id="direccion" class="direccion <?php echo $invalidFieldDireccion ?>" value="<?php echo $_POST['direccion']; ?>" placeholder="<?php echo _('Ingrese su direcci&oacute;n'); ?>" <?php echo $autofocusDireccion ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassDireccion ?>"><?php echo $errorBelowInputDireccion ?></span>             
                </label>
                
                <label for="domicilio">
                    <span class="labelName"><?php echo _('Domicilio'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su domicilio'); ?>.</span>
                    <input type="text" name="domicilio" id="domicilio" class="domicilio <?php echo $invalidFieldDomicilio ?>" value="<?php echo $_POST['domicilio']; ?>" placeholder="<?php echo _('Ingrese su domicilio'); ?>" <?php echo $autofocusDomicilio ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassDomicilio ?>"><?php echo $errorBelowInputDomicilio ?></span>             
                </label>
                
                <label for="localidad">
                    <span class="labelName"><?php echo _('Localidad'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su localidad'); ?>.</span>
                    <input type="text" name="localidad" id="localidad" class="localidad <?php echo $invalidFieldLocalidad ?>" value="<?php echo $_POST['localidad']; ?>" placeholder="<?php echo _('Ingrese su localidad'); ?>" <?php echo $autofocusLocalidad ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassLocalidad ?>"><?php echo $errorBelowInputLocalidad ?></span>             
                </label>
                
                <label for="codigopostal">
                    <span class="labelName"><?php echo _('C&oacute;digo postal'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su c&oacute;digo postal'); ?>.</span>
                    <input type="text" name="codigopostal" id="codigopostal" class="codigopostal <?php echo $invalidFieldCodigoPostal ?>" value="<?php echo $_POST['codigopostal']; ?>" placeholder="<?php echo _('Ej.:'); ?> B1846DWF, 1832" <?php echo $autofocusCodigoPostal ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassCodigoPostal ?>"><?php echo $errorBelowInputCodigoPostal ?></span>             
                </label>
                
                <label for="provincia">
                    <span class="labelName"><?php echo _('Provincia'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su provincia'); ?>.</span>
                    <input type="text" name="provincia" id="provincia" class="provincia <?php echo $invalidFieldProvincia ?>" value="<?php echo $_POST['provincia']; ?>" placeholder="<?php echo _('Ingrese su provincia'); ?>" <?php echo $autofocusProvincia ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassProvincia ?>"><?php echo $errorBelowInputProvincia ?></span>             
                </label>
                
                <label for="pais">
                    <span class="labelName"><?php echo _('Pa&iacute;s'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su pa&iacute;s'); ?>.</span>
                    <input type="text" name="pais" id="pais" class="pais <?php echo $invalidFieldPais ?>" value="<?php echo $_POST['pais']; ?>" placeholder="<?php echo _('Ingrese su pa&iacute;s'); ?>" <?php echo $autofocusPais ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassPais ?>"><?php echo $errorBelowInputPais ?></span>             
                </label>
                
                <label for="telefono">
                    <span class="labelName"><?php echo _('Tel&eacute;fono'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su n&ucaute;mero de tel&eacute;fono'); ?>.</span>
                    <input type="tel" name="telefono" id="telefono" class="telefono <?php echo $invalidFieldTelefono ?>" value="<?php echo $_POST['telefono']; ?>" placeholder="<?php echo _('Ingrese su tel&eacute;fono'); ?>" <?php echo $autofocusTelefono ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassTelefono ?>"><?php echo $errorBelowInputTelefono ?></span>             
                </label>
                
                <label for="email">
                    <span class="labelName"><?php echo _('E-mail'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su e-mail'); ?>.</span>
                    <input type="email" name="email" id="email" class="email <?php echo $invalidFieldEmail ?>" value="<?php echo $_POST['email']; ?>" placeholder="<?php echo _('Ingrese su e-mail'); ?>" <?php echo $autofocusEmail ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassEmail ?>"><?php echo $errorBelowInputEmail ?></span>             
                </label>
                
                <label for="email">
                    <span class="labelName"><?php echo _('Correo electr&oacute;nico'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su correo electr&oacute;nico'); ?>.</span>
                    <input type="email" name="email" id="email" class="email <?php echo $invalidFieldEmail ?>" value="<?php echo $_POST['email']; ?>" placeholder="<?php echo _('Ingrese su correo electr&oacute;nico'); ?>" <?php echo $autofocusEmail ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassEmail ?>"><?php echo $errorBelowInputEmail ?></span>             
                </label>                
                
                <label for="website">
                    <span class="labelName"><?php echo _('Sitio web'); ?></span>
                    <span class="sug">Debe ingresar su sitio web comenzando con <span>http://www</span>.</span>
                    <input type="url" name="website" id="website" class="website <?php echo $invalidFieldWebsite ?>" value="<?php echo $_POST['website']; ?>" placeholder="<?php echo _('Debe comenzar con http://www'); ?>" <?php echo $autofocusWebsite ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassWebsite ?>"><?php echo $errorBelowInputWebsite ?></span>             
                </label>          
                
                <label for="facebook">
                    <span class="labelName"><?php echo _('Perfil de Facebook'); ?></span>
                    <span class="sug">Debe ingresar su sitio web comenzando con <span>http://www.facebook.com/</span>.</span>
                    <input type="url" name="facebook" id="facebook" class="facebook <?php echo $invalidFieldFacebook ?>" value="<?php echo $_POST['facebook']; ?>" placeholder="<?php echo _('Debe comenzar con http://www.facebook.com/'); ?>" <?php echo $autofocusFacebook ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassFacebook ?>"><?php echo $errorBelowInputFacebook ?></span>             
                </label>
                
                <label for="empresa">
                    <span class="labelName"><?php echo _('Empresa'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su empresa'); ?>.</span>
                    <input type="text" name="empresa" id="empresa" class="empresa <?php echo $invalidFieldEmpresa ?>" value="<?php echo $_POST['empresa']; ?>" placeholder="<?php echo _('Ingrese su empresa'); ?>" <?php echo $autofocusEmpresa ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassEmpresa ?>"><?php echo $errorBelowInputEmpresa ?></span>             
                </label>
                
                <label for="rubro">
                    <span class="labelName"><?php echo _('Rubro'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su rubro'); ?>.</span>
                    <input type="text" name="rubro" id="rubro" class="rubro <?php echo $invalidFieldRubro ?>" value="<?php echo $_POST['rubro']; ?>" placeholder="<?php echo _('Ingrese su rubro'); ?>" <?php echo $autofocusRubro ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassRubro ?>"><?php echo $errorBelowInputRubro ?></span>             
                </label>
                
                <label for="cargo">
                    <span class="labelName"><?php echo _('Cargo'); ?></span>
                    <span class="sug"><?php echo _('Ingrese su cargo'); ?>.</span>
                    <input type="text" name="cargo" id="cargo" class="cargo <?php echo $invalidFieldCargo ?>" value="<?php echo $_POST['cargo']; ?>" placeholder="<?php echo _('Ingrese su cargo'); ?>" <?php echo $autofocusCargo ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassCargo ?>"><?php echo $errorBelowInputCargo ?></span>             
                </label>
                
                <label for="fecha">
                    <span class="labelName"><?php echo _('Fecha'); ?></span>
                    <span class="sug"><?php echo _('Indique la fecha deseada'); ?>.</span>
                    <input type="date" name="fecha" id="fecha" class="fecha <?php echo $invalidFieldFecha ?>" value="<?php echo $_POST['fecha']; ?>" placeholder="<?php echo _('Indique la fecha deseada'); ?>" <?php echo $autofocusFecha ?>>
                    <span class="errorForm borderBox plm errorColour bold <?php echo $errorFormClassFecha ?>"><?php echo $errorBelowInputFecha ?></span>             
                </label>

                <fieldset class="<?php echo $invalidFieldNewsletter ?>">
                    <legend class="labelName"><?php echo _('&iquest;Desea recibir el bolet&iacute;n de noticias?'); ?></legend>

                    <label for="radioSi" class="radio prn pll mbn">
                        <input type="radio" name="newsletter" id="radioSi" value="<?php echo _('Si'); ?>" class="radio floatLeft mrs" <?php echo $autofocusNewsletter ?>>
                        <span><?php echo _('Newsletter S&iacute;'); ?></span>
                    </label>

                    <label for="radioNo" class="radio prn pll mbn">
                        <input type="radio" name="newsletter" id="radioNo" value="<?php echo _('No'); ?>" class="radio floatLeft mrs">
                        <span><?php echo _('Newsletter No'); ?></span>
                    </label>

                    <label for="radioNoSe" class="radio pan mbn">
                        <input type="radio" name="newsletter" id="radioNoSe" value="<?php echo _('No Sé'); ?>" class="radio floatLeft mrs">
                        <span><?php echo _('Newsletter No S&eacute;'); ?></span>
                    </label>
                </fieldset>

                <label for="preciotilde">
                    <?php echo _('Prefiero charlar el precio personalmente'); ?>
                    <input type="checkbox" name="preciotilde" id="preciotilde" class="check preciotilde" value="Si">
                </label>
                
                <label for="browsersInput">
                    <?php echo _('Choose a browser from this list:'); ?>
                    <input type="text" list="browsersList" name="myBrowser" id="browsersInput">
                    <datalist id="browsersList">
                        <option value="Chrome">
                        <option value="Firefox">
                        <option value="Internet Explorer">
                        <option value="Opera">
                        <option value="Safari">
                        <option value="Microsoft Edge">
                    </datalist>
                </label>


                <label for="habitacion">
                    <?php echo _('Habitaci&oacute;n'); ?>
                    <select id="habitacion" name="habitacion" class="habitacion" >
                        <option value="<?php echo $_POST['habitacion']; ?>" selected><?php echo _('Seleccione una opci&oacute;n'); ?></option>
                        <option value="a"><?php echo _('a'); ?></option>
                        <option value="b">b</option>
                    </select>
                </label>

    <!--            <select name="habitaciones[]" size="4" multiple="">
                <?php
    //                $options = array("a", "b", "c", "d", "e", "f");
    //                foreach ($options as $option) {
    //                    echo '<option value="' . $option . '"';
    //                    if (in_array($option, $habitaciones)) {
    //                        echo " selected";
    //                    }
    //                    echo ">" . ucfirst($option) . "</option>";
    //                }
                ?>
                </select>-->
                
                <label for="mensaje">
                    <span class="labelName"><?php echo _('Mensaje'); ?></span>
                    <textarea name="mensaje" id="mensaje" class="mensaje" placeholder="<?php echo _('Escriba aqu&iacute; su mensaje') ?>"><?php echo $_POST['mensaje']; ?></textarea>
                </label>

                <input type="submit" value="<?php echo _('Enviar'); ?>" id="enviar" name="enviarForm" class="enviar mha upperCaseBT">
            </form>
            </div>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
        <script src="/nuevo/etc/js/scrollKeep.js"></script>
        <script src="/nuevo/etc/js/_contacto.js"></script>
        <script src="/nuevo/etc/js/_form.js"></script>
</body>
</html>