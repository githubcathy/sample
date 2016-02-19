<html>
<head>
</head>
<body>
<h1><font color="#800000">Details</font></h1>

<table width="200" border="1" style="border-color:#E2E2E2; background-color:#FAFAFA;">
  <tr>
    <td><table width="650" border="1" style="border-color:#E2E2E2;">
      <tr>
        <td width="277" align="left">OrderNo:&nbsp;&nbsp;<input type="text" id="orderNo1" name="<?php echo $lab[$i]["ID"]; ?>"  size="20" maxlength="50" value="<?php echo $lab[$i]["orderNo"] ?>" /></td>
        <td width="357">Sidemark:&nbsp;&nbsp;<input type="text" id="sidemark1" name="<?php echo $lab[$i]["ID"]; ?>"  size="20" maxlength="50" value="<?php echo $lab[$i]["sidemark"]; ?>" onchange="valueChange(this)"/></td>
      </tr>
    </table>
    <table width="650" border="1" style="border-color:#E2E2E2;">
      <tr>
        <td width="277" align="left">PONo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="PO1" name="<?php echo $lab[$i]["ID"]; ?>"  size="20" maxlength="50" value="<?php echo $lab[$i]["PO"] ?>" onchange="valueChange(this)"/></td>
        <td width="357"><?php echo $lab[$i]["date1"]; ?></td> 
      </tr>
    </table>

    <table width="650" border="1" style="border-color:#E2E2E2;">
        <tr>
          <td width="269"><select name="<?php echo $lab[$i]["ID"]; ?>" id="blinds1" onchange="valueChange(this)">
            <option value="">--Select--</option>
            <option value="2quote; Basswood Blinds" <?=$lab[$i]["blinds"] == "2quote; Basswood Blinds" ? ' selected="selected"' : ''?> >2&quot; Basswood Blinds</option>
            <option value="2quote; Faux Wood Blinds" <?=$lab[$i]["blinds"]== "2quote; Faux Wood Blinds" ? ' selected="selected"' : ''?> >2&quot; Faux Wood Blinds</option>
            <option value="2-1/2quote; Basswood Blinds" <?=$lab[$i]["blinds"] == "2-1/2quote; Basswood Blinds" ? ' selected="selected"' : ''?> >2-1/2&quot; Basswood Blinds</option>
            <option value="2-1/2quote; Faux Wood Blinds" <?=$lab[$i]["blinds"] == "2-1/2quote; Faux Wood Blinds" ? ' selected="selected"' : ''?> >2-1/2&quot; Faux Wood Blinds</option>
          </select></td>
          <td width="365"><select name="<?php echo $lab[$i]["ID"]; ?>" id="type1" onchange="valueChange(this)" >
            <option value="">--Select--</option>
            <option value="Standard Lift" <?=$lab[$i]["type"]  == "Standard Lift" ? ' selected="selected"' : ''?> >Standard Lift</option>
            <option value="Two on One Headrail" <?=$lab[$i]["type"]  == "Two on One Headrail" ? ' selected="selected"' : ''?> >Two on One Headrail</option>
            <option value="Three on One Headrail" <?=$lab[$i]["type"]  == "Three on One Headrail" ? ' selected="selected"' : ''?> >Three on One Headrail</option>
          </select></td>
        </tr>
      </table>
      <table width="650" border="1" style="border-color:#E2E2E2;">
        <tr>
          <td width="27"><strong>w:</strong></td>
          <td width="74"><input type="text" id="valwidth1" name="<?php echo $lab[$i]["ID"]; ?>"  size="10" value="<?php echo $lab[$i]["valwidth"]; ?>" onchange="valueChange(this)" /></td>
          <td width="19"><strong>h:</strong></td>
          <td width="115"><input type="text" id="valheight1" name="<?php echo $lab[$i]["ID"]; ?>"  size="10" value="<?php echo $lab[$i]["valheight"]; ?>"  onchange="valueChange(this)"/></td>
          <td width="98"><strong>Val Width:</strong></td>
          <td width="107"><input type="text" id="vwidth1" name="<?php echo $lab[$i]["ID"]; ?>"  size="10" value="<?php echo $lab[$i]["vwidth"]; ?>" onchange="valueChange(this)" /></td>
          <td width="36"><strong>mt:</strong></td>
          <td width="122"><select name="<?php echo $lab[$i]["ID"]; ?>" id="mt1" onchange="valueChange(this)">
            <option value="">--Select--</option>
            <option value="IB" <?=$lab[$i]["mt"] == "IB" ? ' selected="selected"' : ''?> >IB</option>
            <option value="OB" <?=$lab[$i]["mt"] == "OB" ? ' selected="selected"' : ''?>>OB</option>
          </select></td>
        </tr>
      </table>
      <table width="651" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="144">Slat: Slat#: <?php echo $lab[$i]["slat"]; ?></td>
          <td width="242">Color:
            <select name="<?php echo $lab[$i]["ID"]; ?>3" id="color1" onchange="valueChange(this)">
              <option value="">--Select--</option>
              <option value="Alab.Texture" <?=$lab[$i]["color"] == "Alab.Texture" ? ' selected="selected"' : ''?> >Alab.Texture</option>
              <option value="Alabaster" <?=$lab[$i]["color"] == "Alabaster" ? ' selected="selected"' : ''?> >Alabaster</option>
              <option value="Almond" <?=$lab[$i]["color"] == "Almond" ? ' selected="selected"' : ''?>>Almond</option>
              <option value="Rosewood" <?=$lab[$i]["color"] == "Rosewood" ? ' selected="selected"' : ''?>>Rosewood</option>
              <option value="Chestnut" <?=$lab[$i]["color"] == "Chestnut" ? ' selected="selected"' : ''?>>Chestnut</option>
              <option value="Eggshell" <?=$lab[$i]["color"] == "Eggshell" ? ' selected="selected"' : ''?>>Eggshell</option>
              <option value="Natural Maple" <?=$lab[$i]["color"] == "Natural Maple" ? ' selected="selected"' : ''?>>Natural Maple</option>
              <option value="Pearl Texture" <?=$lab[$i]["color"] == "Pearl Texture" ? ' selected="selected"' : ''?>>Pearl Texture</option>
              <option value="Pecan" <?=$lab[$i]["color"] == "Pecan" ? ' selected="selected"' : ''?>>Pecan</option>
              <option value="Snow Texture" <?=$lab[$i]["color"] == "Snow Texture" ? ' selected="selected"' : ''?>>Snow Texture</option>
              <option value="Teak" <?=$lab[$i]["color"] == "Teak" ? ' selected="selected"' : ''?>>Teak</option>
              <option value="Cherry" <?=$lab[$i]["color"] == "Cherry" ? ' selected="selected"' : ''?>>Cherry</option>
              <option value="Mahogany" <?=$lab[$i]["color"] == "Mahogany" ? ' selected="selected"' : ''?>>Mahogany</option>
              <option value="Dark Mahogany" <?=$lab[$i]["color"] == "Dark Mahogany" ? ' selected="selected"' : ''?>>Dark Mahogany</option>
              <option value="Pearl" <?=$lab[$i]["color"] == "Pearl" ? ' selected="selected"' : ''?>>Pearl</option>
              <option value="Maple" <?=$lab[$i]["color"] == "Maple" ? ' selected="selected"' : ''?>>Maple</option>
              <option value="White" <?=$lab[$i]["color"] == "White" ? ' selected="selected"' : ''?>>White</option>
              <option value="Snow White" <?=$lab[$i]["color"] == "Snow White" ? ' selected="selected"' : ''?>>Snow White</option>
              <option value="Bright White" <?=$lab[$i]["color"] == "Bright White" ? ' selected="selected"' : ''?>>Bright White</option>
              <option value="Almost White" <?=$lab[$i]["color"] == "Almost White" ? ' selected="selected"' : ''?>>Almost White</option>
              <option value="Golden Oak" <?=$lab[$i]["color"] == "Golden Oak" ? ' selected="selected"' : ''?>>Golden Oak</option>
              <option value="Cloud" <?=$lab[$i]["color"] == "Cloud" ? ' selected="selected"' : ''?>>Cloud</option>
              <option value="Oyster" <?=$lab[$i]["color"] == "Oyster" ? ' selected="selected"' : ''?>>Oyster</option>
              <option value="Espresso" <?=$lab[$i]["color"] == "Espresso" ? ' selected="selected"' : ''?>>Espresso</option>
              <option value="Black" <?=$lab[$i]["color"] == "Black" ? ' selected="selected"' : ''?>>Black</option>
              <option value="Bourbon" <?=$lab[$i]["color"] == "Bourbon" ? ' selected="selected"' : ''?>>Bourbon</option>
              <option value="Chocolate" <?=$lab[$i]["color"] == "Chocolate" ? ' selected="selected"' : ''?>>Chocolate</option>
              <option value="Walnut" <?=$lab[$i]["color"] == "Walnut" ? ' selected="selected"' : ''?>>Walnut</option>
            </select></td>
          <td width="287">
            Quantity:
            <input type="text" id="qty1" name="<?php echo $lab[$i]["ID"]; ?>"  size="4" value="<?php echo $lab[$i]["qty"]; ?>" onchange="valueChange(this)" /></td>
        </tr>
      </table>
      <table width="650" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="138">Valance Type:</td>
          <td width="197"><select name="<?php echo $lab[$i]["ID"]; ?>" id="size1" onchange="valueChange(this)" >
            <option value="">--Select--</option>
            <option value="3-1/4quote Crown" <?=$lab[$i]["size"] == "3-1/4quote Crown" ? ' selected="selected"' : ''?> >3-1/4&quot; Crown</option>
            <option value="3-1/2quote Colonial" <?=$lab[$i]["size"] == "3-1/2quote Colonial" ? ' selected="selected"' : ''?> >3-1/2&quot; Colonial</option>
            <option value="none" <?=$lab[$i]["size"] == "none" ? ' selected="selected"' : ''?> >none</option>
          </select></td>
          <td width="119">RTN Width:</td>
          <td width="168"><input name="<?php echo $lab[$i]["ID"]; ?>" id="rtn1" size="15" onchange="valueChange(this)" value="<?php echo $lab[$i]["rtn"]; ?>">
          </td>
        </tr>
      </table>
      <table width="650" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="38">Tilt:</td>
          <td width="157"><select name="<?php echo $lab[$i]["ID"]; ?>" id="tilt11" onchange="valueChange(this)" >
            <option value="">--Select--</option>
            <option value="Cord" <?=$lab[$i]["tilt1"] == "Cord" ? ' selected="selected"' : ''?> >Cord</option>
            <option value="Wand" <?=$lab[$i]["tilt1"] == "Wand" ? ' selected="selected"' : ''?> >Wand</option>
            <option value="Motor Infrared" <?=$lab[$i]["tilt1"] == "Motor Infrared" ? ' selected="selected"' : ''?> >Motor Infrared</option>
            <option value="Motor RF" <?=$lab[$i]["tilt1"] == "Motor RF" ? ' selected="selected"' : ''?> >Motor RF</option>
          </select></td>
          <td width="58"> Color:</td>
          <td width="157"><input type="text" id="tcolor1" name="<?php echo $lab[$i]["ID"]; ?>" value="<?php echo $lab[$i]["cordcolor"]; ?>" /></td>
          <td width="82">Headrail:</td>
          <td width="118"><input type="text" id="headrail1" name="<?php echo $lab[$i]["ID"]; ?>" value="<?php echo $lab[$i]["headrail"]; ?>" /></td>
        </tr>
      </table>
      <table width="650" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="38">Lift:</td>
          <td width="157"><select name="<?php echo $lab[$i]["ID"]; ?>" id="lilt11" onchange="valueChange(this)">
            <option value="Cord">Cord</option>
          </select></td>
          <td width="58"> Color:</td>
          <td width="157"><input type="text" id="lcolor1" name="<?php echo $lab[$i]["ID"]; ?>" value="<?php echo $lab[$i]["cordcolor"]; ?>" /></td>
          <td width="82">Ladder:</td>
          <td width="118"><input type="text" id="ladder1" name="<?php echo $lab[$i]["ID"]; ?>" value="<?php echo  $lab[$i]["ladder"]; ?>" /></td>
        </tr>
      </table>
      <table width="648" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="74">Control:</td>
          <td width="213"><select name="<?php echo $lab[$i]["ID"]; ?>" id="control1" onchange="valueChange(this)">
            <option value="">--Select--</option>
            <option value="L:R T:L" <?=$lab[$i]["control"] == "L:R T:L" ? ' selected="selected"' : ''?> >Lift Right/Tilt Left</option>
            <option value="L:L T:R" <?=$lab[$i]["control"] == "L:L T:R" ? ' selected="selected"' : ''?> >Lift Left/Tilt Right</option>
            <option value="L:R T:R" <?=$lab[$i]["control"] == "L:R T:R" ? ' selected="selected"' : ''?> >Lift Right/Tilt Right</option>
            <option value="L:L T:L" <?=$lab[$i]["control"] == "L:L T:L" ? ' selected="selected"' : ''?> >Lift Left/Tilt Left</option>
            <option value="Loop-Left" <?=$lab[$i]["control"] == "Loop-Left" ? ' selected="selected"' : ''?> >Loop-Left</option>
            <option value="Loop-Right" <?=$lab[$i]["control"] == "Loop-Right" ? ' selected="selected"' : ''?> >Loop-Right</option>
          </select></td>
          <td width="339">Price:
            <input type="text" id="price1" name="<?php echo $lab[$i]["ID"]; ?>"  size="10" value="<?php echo $lab[$i]["price"]; ?>"onchange="valueChange(this)"/></td>
        </tr>
      </table>
      <table width="650" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="264"><input type="text" id="customer1" name="<?php echo $lab[$i]["ID"]; ?>"  size="10" value="<?php echo $lab[$i]["customer"]; ?>" onchange="valueChange(this)"/></td>
          <td width="62">Order</td>
          <td width="63"> <input type="text" id="index" name="<?php echo $lab[$i]["ID"]; ?>" value="<?php echo $lab[$i]["index"]; ?>"  size="3"  style="border: 0px;"/>
           </td>
          <td width="88">&nbsp;&nbsp;&nbsp;&nbsp;of</td>
          <td width="139"><input type="text" id="total" name="<?php echo $lab[$i]["ID"]; ?>" value="<?php echo $total; ?>"  size="3" style="border: 0px;"/></td>
        </tr>
      </table>

    </td>
  </tr>
</table>

</body>
</html>