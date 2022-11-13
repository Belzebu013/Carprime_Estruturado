<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style type="text/css">
        body{
            background: #DCDCDC;
            width: 80%;
            margin-left: 200px;

        }
        .texto{
            width: 20%;
            height: 100px;
        }
        .tamanho{
            width: 100px;
            height: 30px;
            border: solid 3px;
        }
        


    </style>
    
    <title>CarPrime</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="imagens/cp.jpg" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">CarPrime</span>
                    <span class="profession">Versão 1.0.0</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                         <i class='bi bi-house'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="clientes.php">
                            <i class="bi bi-person-lines-fill"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text nav-text">Clientes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="veiculos.php">
                            <i class='"bi bi-truck'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text nav-text">Veículos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="cadastro.php">
                            <i class='bi bi-person-plus ' ></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text nav-text">Cadastro</span>
                        </a>
                    </li>             

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="login.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

   <section class="home">
        <script src="https://cdn02.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
        <script src="https://cdn03.jotfor.ms/static/jotform.forms.js?3.3.33502" type="text/javascript"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
        <script src="https://cdn01.jotfor.ms/js/vendor/imageinfo.js?v=3.3.33502" type="text/javascript"></script>
        <script src="https://cdn02.jotfor.ms/file-uploader/fileuploader.js?v=3.3.33502"></script>
        <script type="text/javascript"> JotForm.newDefaultTheme = false;
    JotForm.extendsNewTheme = false;
    JotForm.newPaymentUIForNewCreatedForms = false;

    JotForm.init(function(){
    /*INIT-START*/
      setTimeout(function() {
          $('input_6').hint('ex: myname@example.com');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_54').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_55').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_64').setAttribute('tabindex',0);
      JotForm.setCustomHint( 'input_64', 'Digite aqui...' );
      JotForm.alterTexts({"alphabetic":"Este campo só pode conter letras.","alphanumeric":"Este campo deve conter letras e números.","confirmClearForm":"Are you sure you want to clear the form","confirmEmail":"E-mail does not match","email":"Enter a valid e-mail address","generalError":"Existem alguns erros no formulário. Arrume-os antes de continuar. ","generalPageError":"Há erros nesta página. Por favor, corrigi-los antes de continuar.","gradingScoreError":"Pontuação total deve ser menor ou igual a ","incompleteFields":"There are incomplete required fields. Please complete them.","inputCarretErrorA":"A entrada não deve ser menor do que o valor mínimo:","inputCarretErrorB":"Valor não deve ser maior do que o máximo:","lessThan":"Your score should be less than","maxDigitsError":"O numero máximo de caracteres permitidos são","maxSelectionsError":"O número máximo de seleções permitido é","minSelectionsError":"O número mínimo exigido de seleções é","multipleFileUploads_emptyError":"{file} está vazio, por favor selecione os arquivos denovo.","multipleFileUploads_minSizeError":"{file} é muito pequeno, o tamanho mínimo do arquivo é {minSizeLimit}.","multipleFileUploads_onLeave":"Os arquivos agora estão em upload, se você sair agora o upload será cancelado.","multipleFileUploads_sizeError":"{file} é muito grande, o tamanho máximo é {sizeLimit}.","multipleFileUploads_typeError":"O arquivo {file} é inválido, pois somente as extensões {extensions} são permitidas.","numeric":"Este campo só pode conter valores numéricos.","pastDatesDisallowed":"A data não pode ser passada.","pleaseWait":"Por favor aguarde ...","required":"Preenchimento obrigatório.","requireEveryRow":"Todos os campos são requeridos.","requireOne":"Pelo menos um campo é requisitado","submissionLimit":"Foi mal, mas apenas um envio de dados é permitido. Múltiplas submissões estão desativadas nesse formulário.","uploadExtensions":"Você só pode carregar os seguintes arquivos:","uploadFilesize":"O tamanho do arquivo não pode ser maior do que:"});
      setTimeout(function() {
          JotForm.initMultipleUploads();
      }, 2);
    /*INIT-END*/
    });

   JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"FORMULARIO DE CADASTRO (cliente)","type":"control_head"},null,{"description":"","name":"nomeCompleto3","qid":"3","text":"Nome completo","type":"control_fullname"},{"description":"","name":"endereco","qid":"4","text":"Endereco","type":"control_address"},{"description":"","name":"telefoneFixo5","qid":"5","text":"Telefone Fixo","type":"control_phone"},{"description":"","name":"email6","qid":"6","subLabel":"exemplo@exemplo.com","text":"E-mail","type":"control_email"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"description":"","name":"rg","qid":"54","subLabel":"somente numeros","text":"RG","type":"control_textbox"},{"description":"","name":"cpf","qid":"55","subLabel":"somente numeros","text":"CPF","type":"control_textbox"},{"description":"","name":"telefoneCelular56","qid":"56","text":"Telefone Celular 1","type":"control_phone"},null,{"description":"","name":"enviarCopia58","qid":"58","subLabel":"Tamanho maximo 2 Mb","text":"Enviar copia RG","type":"control_fileupload"},{"description":"","name":"enviarCopia59","qid":"59","subLabel":"Tamanho maximo 2 Mb","text":"Enviar copia CPF","type":"control_fileupload"},null,null,null,null,{"description":"","name":"comentarios64","qid":"64","subLabel":"","text":"Comentarios","type":"control_textarea"},null,null,null,{"description":"","name":"escolhaA","qid":"68","subLabel":"","text":"Escolha a Opcao Desejada ","type":"control_dropdown"},null,null,null,null,null,null,null,null,{"name":"enviar","qid":"77","text":"Enviar","type":"control_button"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"clickTo","qid":"1","text":"FORMULARIO DE CADASTRO (cliente)","type":"control_head"},null,{"description":"","name":"nomeCompleto3","qid":"3","text":"Nome completo","type":"control_fullname"},{"description":"","name":"endereco","qid":"4","text":"Endereco","type":"control_address"},{"description":"","name":"telefoneFixo5","qid":"5","text":"Telefone Fixo","type":"control_phone"},{"description":"","name":"email6","qid":"6","subLabel":"exemplo@exemplo.com","text":"E-mail","type":"control_email"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"description":"","name":"rg","qid":"54","subLabel":"somente numeros","text":"RG","type":"control_textbox"},{"description":"","name":"cpf","qid":"55","subLabel":"somente numeros","text":"CPF","type":"control_textbox"},{"description":"","name":"telefoneCelular56","qid":"56","text":"Telefone Celular 1","type":"control_phone"},null,{"description":"","name":"enviarCopia58","qid":"58","subLabel":"Tamanho maximo 2 Mb","text":"Enviar copia RG","type":"control_fileupload"},{"description":"","name":"enviarCopia59","qid":"59","subLabel":"Tamanho maximo 2 Mb","text":"Enviar copia CPF","type":"control_fileupload"},null,null,null,null,{"description":"","name":"comentarios64","qid":"64","subLabel":"","text":"Comentarios","type":"control_textarea"},null,null,null,{"description":"","name":"escolhaA","qid":"68","subLabel":"","text":"Escolha a Opcao Desejada ","type":"control_dropdown"},null,null,null,null,null,null,null,null,{"name":"enviar","qid":"77","text":"Enviar","type":"control_button"}]);}, 20); 
</script>
<link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.33502" rel="stylesheet" type="text/css" />
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/nova.css?3.3.33502" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/themes/CSS/54b929a4700cc4f2408b4567.css?themeRevisionID=60eb6ecddb71c14295405e83"/>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.33502" />
<style type="text/css">
@import 'https://shots.jotform.com/elton/genericTheme.css';

    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:10px;
        padding-bottom:10px;
    }
    .form-label-right{
        width:150px;
    }
    .form-all{
        width:900px;
        color:#555 !important;
        font-family:'Didact Gothic';
        font-size:18px;
    }
</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: Didact Gothic, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Didact Gothic, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Didact Gothic, sans-serif;
    }
    .form-header-group {
      font-family: Didact Gothic, sans-serif;
    }
    .form-label {
      font-family: Didact Gothic, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 10px 10px 10px 10px px;
      margin-bottom: 10px 10px 10px 10px px;
    }
  
    .form-all {
      max-width: 900px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 150px;
    }
  
    .form-all {
      font-size: 18px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 18px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 18px
    }
  
    .supernova .form-all, .form-all {
      background-color: #e4e9f7;
;
    }
  
    .form-all {
      color: #555;
    }
    .form-header-group .form-header {
      color: rgb(255, 255, 255);
    }
    .form-header-group .form-subHeader {
      color: #555;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #555;
    }
    .form-sub-label {
      color: #6f6f6f;
    }
  
    .supernova {
      background-color: #f5f5f5;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
      .supernova {
        height: 100%;
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: center top;
      }
      .supernova {
        background-image: url("https://shots.jotform.com/elton/pattern/pattern-eo2z.png");
      }
      #stage {
        background-image: url("https://shots.jotform.com/elton/pattern/pattern-eo2z.png");
      }
    
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }
    /* Injected CSS Code */
</style>
    <div class="container">

        <form class="jotform-form" action="https://submit.jotform.com/submit/221447687197671/" method="post" enctype="multipart/form-data" name="form_221447687197671" id="221447687197671" accept-charset="utf-8" autocomplete="on">
          <input type="hidden" name="formID" value="221447687197671" />
          <input type="hidden" id="JWTContainer" value="" />
          <input type="hidden" id="cardinalOrderNumber" value="" />
          <div role="main" class="form-all">
            <ul class="form-section page-section">
              <li class="form-line jf-required" data-type="control_dropdown" id="id_68">
                <label class="form-label form-label-top form-label-auto" id="label_68" for="input_68">
                  Escolha a Opção Desejada
                  <span class="form-required">
                    *
                  </span>
                </label>
                <div id="cid_68" class="form-input-wide jf-required">
                  <select class="form-dropdown validate[required]" id="input_68" name="q68_escolhaA" style="width:150px" data-component="dropdown" required="">
                    <option value="">  </option>
                    <option value="" id="cliente_cad"> CLIENTE </option>
                    <option value="" id="veiculo"> VEICULO </option>
                  </select>
                </div>
              </li>
              <li class="form-line jf-required" data-type="control_fullname" id="id_3">
                <label class="form-label form-label-top form-label-auto" id="label_3" for="first_3">
                  Nome completo
                  <span class="form-required">
                    *
                  </span>
                </label>
                <div id="cid_3" class="form-input-wide jf-required">
                  <div data-wrapper-react="true">
                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                      <input type="text" id="first_3" name="q3_nomeCompleto3[first]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_3 given-name" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" required="" />
                      <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Primeiro nome </label>
                    </span>
                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                      <input type="text" id="last_3" name="q3_nomeCompleto3[last]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_3 family-name" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" required="" />
                      <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Sobrenome </label>
                    </span>
                  </div>
                </div>
              </li>
              <li class="form-line jf-required" data-type="control_address" id="id_4">
                <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4_addr_line1">
                  Endereço
                  <span class="form-required">
                    *
                  </span>
                </label>
                <div id="cid_4" class="form-input-wide jf-required">
                  <div summary="" class="form-address-table jsTest-addressField">
                    <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                      <span class="form-address-line form-address-street-line jsTest-address-lineField">
                        <span class="form-sub-label-container" style="vertical-align:top">
                          <input type="text" id="input_4_addr_line1" name="q4_endereco[addr_line1]" class="form-textbox validate[required] form-address-line" data-defaultvalue="" autoComplete="section-input_4 address-line1" value="" data-component="address_line_1" aria-labelledby="label_4 sublabel_4_addr_line1" required="" />
                          <label class="form-sub-label" for="input_4_addr_line1" id="sublabel_4_addr_line1" style="min-height:13px" aria-hidden="false"> Rua e número </label>
                        </span>
                      </span>
                    </div>
                    <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                      <span class="form-address-line form-address-street-line jsTest-address-lineField">
                        <span class="form-sub-label-container" style="vertical-align:top">
                          <input type="text" id="input_4_addr_line2" name="q4_endereco[addr_line2]" class="form-textbox form-address-line" data-defaultvalue="" autoComplete="section-input_4 address-line2" value="" data-component="address_line_2" aria-labelledby="label_4 sublabel_4_addr_line2" />
                          <label class="form-sub-label" for="input_4_addr_line2" id="sublabel_4_addr_line2" style="min-height:13px" aria-hidden="false"> Bairro / Complemento </label>
                        </span>
                      </span>
                    </div>
                    <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                      <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                          <input type="text" id="input_4_city" name="q4_endereco[city]" class="form-textbox validate[required] form-address-city" data-defaultvalue="" autoComplete="section-input_4 address-level2" value="" data-component="city" aria-labelledby="label_4 sublabel_4_city" required="" />
                          <label class="form-sub-label" for="input_4_city" id="sublabel_4_city" style="min-height:13px" aria-hidden="false"> Cidade </label>
                        </span>
                      </span>
                      <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                          <input type="text" id="input_4_state" name="q4_endereco[state]" class="form-textbox validate[required] form-address-state" data-defaultvalue="" autoComplete="section-input_4 address-level1" value="" data-component="state" aria-labelledby="label_4 sublabel_4_state" required="" />
                          <label class="form-sub-label" for="input_4_state" id="sublabel_4_state" style="min-height:13px" aria-hidden="false"> Estado </label>
                        </span>
                      </span>
                    </div>
                    <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                      <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                          <input type="text" id="input_4_postal" name="q4_endereco[postal]" class="form-textbox validate[required] form-address-postal" data-defaultvalue="" autoComplete="section-input_4 postal-code" value="" data-component="zip" aria-labelledby="label_4 sublabel_4_postal" required="" />
                          <label class="form-sub-label" for="input_4_postal" id="sublabel_4_postal" style="min-height:13px" aria-hidden="false"> CEP </label>
                        </span>
                      </span>
                      <span class="form-address-line form-address-country-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                          <select class="form-dropdown validate[required] form-address-country noTranslate" name="q4_endereco[country]" id="input_4_country" data-component="country" required="" aria-labelledby="label_4 sublabel_4_country" autoComplete="section-input_4 country">
                            <option value=""> Favor selecionar </option>
                            <option value="United States"> United States </option>
                            <option value="Afghanistan"> Afghanistan </option>
                            <option value="Albania"> Albania </option>
                            <option value="Algeria"> Algeria </option>
                            <option value="American Samoa"> American Samoa </option>
                            <option value="Andorra"> Andorra </option>
                            <option value="Angola"> Angola </option>
                            <option value="Anguilla"> Anguilla </option>
                            <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                            <option value="Argentina"> Argentina </option>
                            <option value="Armenia"> Armenia </option>
                            <option value="Aruba"> Aruba </option>
                            <option value="Australia"> Australia </option>
                            <option value="Austria"> Austria </option>
                            <option value="Azerbaijan"> Azerbaijan </option>
                            <option value="The Bahamas"> The Bahamas </option>
                            <option value="Bahrain"> Bahrain </option>
                            <option value="Bangladesh"> Bangladesh </option>
                            <option value="Barbados"> Barbados </option>
                            <option value="Belarus"> Belarus </option>
                            <option value="Belgium"> Belgium </option>
                            <option value="Belize"> Belize </option>
                            <option value="Benin"> Benin </option>
                            <option value="Bermuda"> Bermuda </option>
                            <option value="Bhutan"> Bhutan </option>
                            <option value="Bolivia"> Bolivia </option>
                            <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                            <option value="Botswana"> Botswana </option>
                            <option selected="" value="Brazil"> Brazil </option>
                            <option value="Brunei"> Brunei </option>
                            <option value="Bulgaria"> Bulgaria </option>
                            <option value="Burkina Faso"> Burkina Faso </option>
                            <option value="Burundi"> Burundi </option>
                            <option value="Cambodia"> Cambodia </option>
                            <option value="Cameroon"> Cameroon </option>
                            <option value="Canada"> Canada </option>
                            <option value="Cape Verde"> Cape Verde </option>
                            <option value="Cayman Islands"> Cayman Islands </option>
                            <option value="Central African Republic"> Central African Republic </option>
                            <option value="Chad"> Chad </option>
                            <option value="Chile"> Chile </option>
                            <option value="China"> China </option>
                            <option value="Christmas Island"> Christmas Island </option>
                            <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                            <option value="Colombia"> Colombia </option>
                            <option value="Comoros"> Comoros </option>
                            <option value="Congo"> Congo </option>
                            <option value="Cook Islands"> Cook Islands </option>
                            <option value="Costa Rica"> Costa Rica </option>
                            <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                            <option value="Croatia"> Croatia </option>
                            <option value="Cuba"> Cuba </option>
                            <option value="Curacao"> Curacao </option>
                            <option value="Cyprus"> Cyprus </option>
                            <option value="Czech Republic"> Czech Republic </option>
                            <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                            <option value="Denmark"> Denmark </option>
                            <option value="Djibouti"> Djibouti </option>
                            <option value="Dominica"> Dominica </option>
                            <option value="Dominican Republic"> Dominican Republic </option>
                            <option value="Ecuador"> Ecuador </option>
                            <option value="Egypt"> Egypt </option>
                            <option value="El Salvador"> El Salvador </option>
                            <option value="Equatorial Guinea"> Equatorial Guinea </option>
                            <option value="Eritrea"> Eritrea </option>
                            <option value="Estonia"> Estonia </option>
                            <option value="Ethiopia"> Ethiopia </option>
                            <option value="Falkland Islands"> Falkland Islands </option>
                            <option value="Faroe Islands"> Faroe Islands </option>
                            <option value="Fiji"> Fiji </option>
                            <option value="Finland"> Finland </option>
                            <option value="France"> France </option>
                            <option value="French Polynesia"> French Polynesia </option>
                            <option value="Gabon"> Gabon </option>
                            <option value="The Gambia"> The Gambia </option>
                            <option value="Georgia"> Georgia </option>
                            <option value="Germany"> Germany </option>
                            <option value="Ghana"> Ghana </option>
                            <option value="Gibraltar"> Gibraltar </option>
                            <option value="Greece"> Greece </option>
                            <option value="Greenland"> Greenland </option>
                            <option value="Grenada"> Grenada </option>
                            <option value="Guadeloupe"> Guadeloupe </option>
                            <option value="Guam"> Guam </option>
                            <option value="Guatemala"> Guatemala </option>
                            <option value="Guernsey"> Guernsey </option>
                            <option value="Guinea"> Guinea </option>
                            <option value="Guinea-Bissau"> Guinea-Bissau </option>
                            <option value="Guyana"> Guyana </option>
                            <option value="Haiti"> Haiti </option>
                            <option value="Honduras"> Honduras </option>
                            <option value="Hong Kong"> Hong Kong </option>
                            <option value="Hungary"> Hungary </option>
                            <option value="Iceland"> Iceland </option>
                            <option value="India"> India </option>
                            <option value="Indonesia"> Indonesia </option>
                            <option value="Iran"> Iran </option>
                            <option value="Iraq"> Iraq </option>
                            <option value="Ireland"> Ireland </option>
                            <option value="Israel"> Israel </option>
                            <option value="Italy"> Italy </option>
                            <option value="Jamaica"> Jamaica </option>
                            <option value="Japan"> Japan </option>
                            <option value="Jersey"> Jersey </option>
                            <option value="Jordan"> Jordan </option>
                            <option value="Kazakhstan"> Kazakhstan </option>
                            <option value="Kenya"> Kenya </option>
                            <option value="Kiribati"> Kiribati </option>
                            <option value="North Korea"> North Korea </option>
                            <option value="South Korea"> South Korea </option>
                            <option value="Kosovo"> Kosovo </option>
                            <option value="Kuwait"> Kuwait </option>
                            <option value="Kyrgyzstan"> Kyrgyzstan </option>
                            <option value="Laos"> Laos </option>
                            <option value="Latvia"> Latvia </option>
                            <option value="Lebanon"> Lebanon </option>
                            <option value="Lesotho"> Lesotho </option>
                            <option value="Liberia"> Liberia </option>
                            <option value="Libya"> Libya </option>
                            <option value="Liechtenstein"> Liechtenstein </option>
                            <option value="Lithuania"> Lithuania </option>
                            <option value="Luxembourg"> Luxembourg </option>
                            <option value="Macau"> Macau </option>
                            <option value="Macedonia"> Macedonia </option>
                            <option value="Madagascar"> Madagascar </option>
                            <option value="Malawi"> Malawi </option>
                            <option value="Malaysia"> Malaysia </option>
                            <option value="Maldives"> Maldives </option>
                            <option value="Mali"> Mali </option>
                            <option value="Malta"> Malta </option>
                            <option value="Marshall Islands"> Marshall Islands </option>
                            <option value="Martinique"> Martinique </option>
                            <option value="Mauritania"> Mauritania </option>
                            <option value="Mauritius"> Mauritius </option>
                            <option value="Mayotte"> Mayotte </option>
                            <option value="Mexico"> Mexico </option>
                            <option value="Micronesia"> Micronesia </option>
                            <option value="Moldova"> Moldova </option>
                            <option value="Monaco"> Monaco </option>
                            <option value="Mongolia"> Mongolia </option>
                            <option value="Montenegro"> Montenegro </option>
                            <option value="Montserrat"> Montserrat </option>
                            <option value="Morocco"> Morocco </option>
                            <option value="Mozambique"> Mozambique </option>
                            <option value="Myanmar"> Myanmar </option>
                            <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                            <option value="Namibia"> Namibia </option>
                            <option value="Nauru"> Nauru </option>
                            <option value="Nepal"> Nepal </option>
                            <option value="Netherlands"> Netherlands </option>
                            <option value="Netherlands Antilles"> Netherlands Antilles </option>
                            <option value="New Caledonia"> New Caledonia </option>
                            <option value="New Zealand"> New Zealand </option>
                            <option value="Nicaragua"> Nicaragua </option>
                            <option value="Niger"> Niger </option>
                            <option value="Nigeria"> Nigeria </option>
                            <option value="Niue"> Niue </option>
                            <option value="Norfolk Island"> Norfolk Island </option>
                            <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                            <option value="Northern Mariana"> Northern Mariana </option>
                            <option value="Norway"> Norway </option>
                            <option value="Oman"> Oman </option>
                            <option value="Pakistan"> Pakistan </option>
                            <option value="Palau"> Palau </option>
                            <option value="Palestine"> Palestine </option>
                            <option value="Panama"> Panama </option>
                            <option value="Papua New Guinea"> Papua New Guinea </option>
                            <option value="Paraguay"> Paraguay </option>
                            <option value="Peru"> Peru </option>
                            <option value="Philippines"> Philippines </option>
                            <option value="Pitcairn Islands"> Pitcairn Islands </option>
                            <option value="Poland"> Poland </option>
                            <option value="Portugal"> Portugal </option>
                            <option value="Puerto Rico"> Puerto Rico </option>
                            <option value="Qatar"> Qatar </option>
                            <option value="Republic of the Congo"> Republic of the Congo </option>
                            <option value="Romania"> Romania </option>
                            <option value="Russia"> Russia </option>
                            <option value="Rwanda"> Rwanda </option>
                            <option value="Saint Barthelemy"> Saint Barthelemy </option>
                            <option value="Saint Helena"> Saint Helena </option>
                            <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                            <option value="Saint Lucia"> Saint Lucia </option>
                            <option value="Saint Martin"> Saint Martin </option>
                            <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                            <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                            <option value="Samoa"> Samoa </option>
                            <option value="San Marino"> San Marino </option>
                            <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                            <option value="Saudi Arabia"> Saudi Arabia </option>
                            <option value="Senegal"> Senegal </option>
                            <option value="Serbia"> Serbia </option>
                            <option value="Seychelles"> Seychelles </option>
                            <option value="Sierra Leone"> Sierra Leone </option>
                            <option value="Singapore"> Singapore </option>
                            <option value="Slovakia"> Slovakia </option>
                            <option value="Slovenia"> Slovenia </option>
                            <option value="Solomon Islands"> Solomon Islands </option>
                            <option value="Somalia"> Somalia </option>
                            <option value="Somaliland"> Somaliland </option>
                            <option value="South Africa"> South Africa </option>
                            <option value="South Ossetia"> South Ossetia </option>
                            <option value="South Sudan"> South Sudan </option>
                            <option value="Spain"> Spain </option>
                            <option value="Sri Lanka"> Sri Lanka </option>
                            <option value="Sudan"> Sudan </option>
                            <option value="Suriname"> Suriname </option>
                            <option value="Svalbard"> Svalbard </option>
                            <option value="eSwatini"> eSwatini </option>
                            <option value="Sweden"> Sweden </option>
                            <option value="Switzerland"> Switzerland </option>
                            <option value="Syria"> Syria </option>
                            <option value="Taiwan"> Taiwan </option>
                            <option value="Tajikistan"> Tajikistan </option>
                            <option value="Tanzania"> Tanzania </option>
                            <option value="Thailand"> Thailand </option>
                            <option value="Timor-Leste"> Timor-Leste </option>
                            <option value="Togo"> Togo </option>
                            <option value="Tokelau"> Tokelau </option>
                            <option value="Tonga"> Tonga </option>
                            <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                            <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                            <option value="Tristan da Cunha"> Tristan da Cunha </option>
                            <option value="Tunisia"> Tunisia </option>
                            <option value="Turkey"> Turkey </option>
                            <option value="Turkmenistan"> Turkmenistan </option>
                            <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                            <option value="Tuvalu"> Tuvalu </option>
                            <option value="Uganda"> Uganda </option>
                            <option value="Ukraine"> Ukraine </option>
                            <option value="United Arab Emirates"> United Arab Emirates </option>
                            <option value="United Kingdom"> United Kingdom </option>
                            <option value="Uruguay"> Uruguay </option>
                            <option value="Uzbekistan"> Uzbekistan </option>
                            <option value="Vanuatu"> Vanuatu </option>
                            <option value="Vatican City"> Vatican City </option>
                            <option value="Venezuela"> Venezuela </option>
                            <option value="Vietnam"> Vietnam </option>
                            <option value="British Virgin Islands"> British Virgin Islands </option>
                            <option value="Isle of Man"> Isle of Man </option>
                            <option value="US Virgin Islands"> US Virgin Islands </option>
                            <option value="Wallis and Futuna"> Wallis and Futuna </option>
                            <option value="Western Sahara"> Western Sahara </option>
                            <option value="Yemen"> Yemen </option>
                            <option value="Zambia"> Zambia </option>
                            <option value="Zimbabwe"> Zimbabwe </option>
                            <option value="other"> Other </option>
                          </select>
                          <label class="form-sub-label" for="input_4_country" id="sublabel_4_country" style="min-height:13px" aria-hidden="false"> País </label>
                        </span>
                      </span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="form-line" data-type="control_phone" id="id_5">
                <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5_area"> Telefone Fixo </label>
                <div id="cid_5" class="form-input-wide">
                  <div data-wrapper-react="true">
                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode">
                      <input type="tel" id="input_5_area" name="q5_telefoneFixo5[area]" class="form-textbox" data-defaultvalue="" autoComplete="section-input_5 tel-area-code" value="" data-component="areaCode" aria-labelledby="label_5 sublabel_5_area" />
                      <span class="phone-separate" aria-hidden="true">
                         -
                      </span>
                      <label class="form-sub-label" for="input_5_area" id="sublabel_5_area" style="min-height:13px" aria-hidden="false"> DDD </label>
                    </span>
                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
                      <input type="tel" id="input_5_phone" name="q5_telefoneFixo5[phone]" class="form-textbox" data-defaultvalue="" autoComplete="section-input_5 tel-local" value="" data-component="phone" aria-labelledby="label_5 sublabel_5_phone" />
                      <label class="form-sub-label" for="input_5_phone" id="sublabel_5_phone" style="min-height:13px" aria-hidden="false"> Número </label>
                    </span>
                  </div>
                </div>
              </li>
              <li class="form-line jf-required" data-type="control_phone" id="id_56">
                <label class="form-label form-label-top form-label-auto" id="label_56" for="input_56_area">
                  Telefone Celular 1
                  <span class="form-required">
                    *
                  </span>
                </label>
                <div id="cid_56" class="form-input-wide jf-required">
                  <div data-wrapper-react="true">
                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode">
                      <input type="tel" id="input_56_area" name="q56_telefoneCelular56[area]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_56 tel-area-code" value="" data-component="areaCode" aria-labelledby="label_56 sublabel_56_area" required="" />
                      <span class="phone-separate" aria-hidden="true">
                         -
                      </span>
                      <label class="form-sub-label" for="input_56_area" id="sublabel_56_area" style="min-height:13px" aria-hidden="false"> DDD </label>
                    </span>
                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
                      <input type="tel" id="input_56_phone" name="q56_telefoneCelular56[phone]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_56 tel-local" value="" data-component="phone" aria-labelledby="label_56 sublabel_56_phone" required="" />
                      <label class="form-sub-label" for="input_56_phone" id="sublabel_56_phone" style="min-height:13px" aria-hidden="false"> Número </label>
                    </span>
                  </div>
                </div>
              </li>
              <li class="form-line jf-required" data-type="control_email" id="id_6">
                <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6">
                  E-mail
                  <span class="form-required">
                    *
                  </span>
                </label>
                <div id="cid_6" class="form-input-wide jf-required">
                  <span class="form-sub-label-container" style="vertical-align:top">
                    <input type="email" id="input_6" name="q6_email6" class="form-textbox validate[required, Email]" data-defaultvalue="" size="30" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_6 sublabel_input_6" required="" />
                    <label class="form-sub-label" for="input_6" id="sublabel_input_6" style="min-height:13px" aria-hidden="false"> exemplo@exemplo.com </label>
                  </span>
                </div>
              </li>
              <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_54">
                <label class="form-label form-label-top" id="label_54" for="input_54">
                  RG
                  <span class="form-required">
                    *
                  </span>
                </label>
                <div id="cid_54" class="form-input-wide jf-required">
                  <span class="form-sub-label-container" style="vertical-align:top">
                    <input type="text" id="input_54" name="q54_rg" data-type="input-textbox" class="form-textbox validate[required, Numeric]" data-defaultvalue="" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_54 sublabel_input_54" required="" />
                    <label class="form-sub-label" for="input_54" id="sublabel_input_54" style="min-height:13px" aria-hidden="false"> somente números </label>
                  </span>
                </div>
              </li>
              <li class="form-line form-line-column form-col-2" data-type="control_fileupload" id="id_58">
                <label class="form-label form-label-top" id="label_58" for="input_58"> Enviar cópia RG </label>
                <div id="cid_58" class="form-input-wide">
                  <div data-wrapper-react="true">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <div class="qq-uploader-buttonText-value">
                        Upload a File
                      </div>
                      <input type="file" id="input_58" name="q58_enviarCopia58[]" multiple="" class="form-upload-multiple" data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, jpg, jpeg, png" data-file-maxsize="2000" data-file-minsize="0" data-file-limit="" data-component="fileupload" />
                      <label class="form-sub-label" for="input_58" style="min-height:13px" aria-hidden="false"> Tamanho máximo 2 Mb </label>
                    </span>
                    <span style="display:none" class="cancelText">
                      Cancel
                    </span>
                    <span style="display:none" class="ofText">
                      of
                    </span>
                  </div>
                </div>
              </li>
              <li class="form-line form-line-column form-col-1 form-line-column-clear jf-required" data-type="control_textbox" id="id_55">
                <label class="form-label form-label-top" id="label_55" for="input_55">
                  CPF
                  <span class="form-required">
                    *
                  </span>
                </label>
                <div id="cid_55" class="form-input-wide jf-required">
                  <span class="form-sub-label-container" style="vertical-align:top">
                    <input type="text" id="input_55" name="q55_cpf" data-type="input-textbox" class="form-textbox validate[required, Numeric]" data-defaultvalue="" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_55 sublabel_input_55" required="" />
                    <label class="form-sub-label" for="input_55" id="sublabel_input_55" style="min-height:13px" aria-hidden="false"> somente números </label>
                  </span>
                </div>
              </li>
              <li class="form-line form-line-column form-col-2" data-type="control_fileupload" id="id_59">
                <label class="form-label form-label-top" id="label_59" for="input_59"> Enviar cópia CPF </label>
                <div id="cid_59" class="form-input-wide">
                  <div data-wrapper-react="true">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <div class="qq-uploader-buttonText-value">
                        Upload a File
                      </div>
                      <input type="file" id="input_59" name="q59_enviarCopia59[]" multiple="" class="form-upload-multiple" data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, jpg, jpeg, png" data-file-maxsize="2000" data-file-minsize="0" data-file-limit="" data-component="fileupload" />
                      <label class="form-sub-label" for="input_59" style="min-height:13px" aria-hidden="false"> Tamanho máximo 2 Mb </label>
                    </span>
                    <span style="display:none" class="cancelText">
                      Cancel
                    </span>
                    <span style="display:none" class="ofText">
                      of
                    </span>
                  </div>
                </div>
              </li>
              <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_textarea" id="id_64">
                <label class="form-label form-label-top" id="label_64" for="input_64"> Comentários </label>
                <div id="cid_64" class="form-input-wide">
                  <textarea id="input_64" class="form-textarea" name="q64_comentarios64" cols="100" rows="3" data-component="textarea" aria-labelledby="label_64"></textarea>
                </div>
              </li>
              <li class="form-line" data-type="control_button" id="id_77">
                <div id="cid_77" class="form-input-wide">
                  <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                    <button id="input_77" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
                      Enviar
                    </button>
                  </div>
                </div>
              </li>
              <li style="clear:both">
              </li>
              <li style="display:none">
                Should be Empty:
                <input type="text" name="website" value="" />
              </li>
            </ul>
          </div>
          <script>
          JotForm.showJotFormPowered = "new_footer";
          </script>
          <script>
          JotForm.poweredByText = "Powered by Jotform";
          </script>
          <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="221447687197671" />
          <script type="text/javascript">
          var all_spc = document.querySelectorAll("form[id='221447687197671'] .si" + "mple" + "_spc");
        for (var i = 0; i < all_spc.length; i++)
        {
          all_spc[i].value = "221447687197671-221447687197671";
        }
          </script>
        </form>
    </div>
    
    </section>


    <script src="js/script.js"></script>
  

</body>
<script>
        $(document).ready(()=>{
            //$('section').addClass('bg-light');

            $('#cliente').click(()=>{
                $.get('cliente_cad.php', data=>{
                    $('body').html(data);
                });
            })

        })

    </script>

</html>