<h2><?php echo $title; ?></h2>


<?php echo validation_errors(); ?>

<?php //echo form_open('news/create'); 
?>
<head>
    <script src="<?php echo base_url(); ?>js/jquery-1.12.2.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.validate.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('css/StyleTeste.css') ?>"/>

    <script type="text/javascript">
        $(document).ready(function () {

            $("#formulario_cadastro").validate({
                rules: {
                    title: {
                        required: true,
                        maxlength: 30
                    },
                    text: {
                        required: true,
                        maxlength: 30
                    }
                },
                messages: {
                    title: {
                        required: " Informe o titulo",
                        maxlength: " Titulo muito longo"
                    },
                    text: {
                        required: " Informe o texto",
                        maxlength: " Titulo muito longo"
                    }
                },
                submitHandler: function (form)
                {
                    form.submit();
                }


            });

            $("#cadastrar").click(function () {
                //alert("ola");
                $.ajax({
                    url: '<?= base_url(); ?>' + 'index.php/news/create',
                    type: 'POST',
                    data: $("#formulario_cadastro").serialize(),
                    success: function (msg) {
                        console.log(msg);
                        if (msg == 'Cadastrado com sucesso!!') {
                            $("#mensagem").html(msg);
                            jQuery.fn.reset = function () {
                                $(this).each(function () {
                                    this.reset();
                                });
                            }
                            $("#formulario_cadastro").reset();
                        }
                    }
                });
                return false;
            });
        });
    </script>

</head>
<body>

    <div id="mensagem"></div>
    <form method="post" action="" id="formulario_cadastro">

        <label for="title">Title </label>
        <input type="input" id="title" name="title" /><br />

        <label for="text">Text</label>
        <textarea id="text" name="text"></textarea><br />



        <label><input type="submit" name="enviar" value="Enviar" /></label>

        <script>

        </script>
</body>
</form>