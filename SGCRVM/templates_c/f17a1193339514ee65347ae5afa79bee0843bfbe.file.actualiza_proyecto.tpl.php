<?php /* Smarty version Smarty 3.1.4, created on 2012-07-20 01:17:36
         compiled from ".\templates\actualiza_proyecto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1476750089590b1f277-35805349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f17a1193339514ee65347ae5afa79bee0843bfbe' => 
    array (
      0 => '.\\templates\\actualiza_proyecto.tpl',
      1 => 1342667926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1476750089590b1f277-35805349',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_50089590ec915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50089590ec915')) {function content_50089590ec915($_smarty_tpl) {?><div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Modificar Ruta </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">
        <p><br>
          CODIGO RUTA: 
          <input type="text" name="codigo" id="codigo"/><br>
          <br>
          
          CODIGO USUARIO:
          <input type="text" name="usuario" id="usuario" /><br>
          <br>
          <label for="fechaAno"></label>
          FECHA:
          <select name="fechaAno" id="fechaAno">
            <option value=" "> </option>
            <option value="2012">2012</option>
          </select>
          <label for="fechaDia"></label>
          <select name="fechaMes" id="fechaMes">
            <option value=" "> </option>
            <option value="01">enero</option>
            <option value="02">febrero</option>
            <option value="03">marzo</option>
            <option value="04">abril</option>
            <option value="05">mayo</option>
            <option value="06">junio</option>
            <option value="07">julio</option>
            <option value="08">agosto</option>
            <option value="09">septiembre</option>
            <option value="10">octubre</option>
            <option value="11">noviembre</option>
            <option value="12">diciembre</option>
          </select> 
          <label for="fechaDia"></label>
          <select name="fechaDia" id="fechaDia">
            <option value=" "> </option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
          <br>
          <br>
          <label for="horaHora"></label>
          HORA:  
          <select name="horaHora" id="horaHora">
            <option value=" "> </option>
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
          </select>
          <label for="horaMinuto"></label>
          <select name="horaMinuto" id="horaMinuto">
<option value=" "> </option>
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
            <option value="51">51</option>
            <option value="52">52</option>
            <option value="53">53</option>
            <option value="54">54</option>
            <option value="55">55</option>
            <option value="56">56</option>
            <option value="57">57</option>
            <option value="58">58</option>
            <option value="59">59</option>
          </select><br>
          <br>
          ESTADO RUTA : 
          <select name="estado">
            <option value="1">PENDIENTE</option>
            <option value="2">EN GESTION</option>
            <option value="3">REALIZADA</option>
          </select>
          <br />
          <input type="hidden" name="accion" value="actualiza">
          <input type="hidden" name="page" value="proyecto">
        </p>
        <div align="center"><br>
          <input name="Actualizar" type="submit" value="Actualizar">
</div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>