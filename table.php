
<table width="200" border="1" style="border-color:#E2E2E2; background-color:#FAFAFA;">
  <tr>
    <td><table width="650" border="1" style="border-color:#E2E2E2;">
      <tr>
        <td width="277" align="left">OrderNo:&nbsp;&nbsp;<input type="text" id="orderNo" name="orderNo"  size="20" maxlength="50"  /></td>
        <td width="357">Sidemark:&nbsp;&nbsp;<input type="text" id="sidemark" name="sidemark"  size="20" maxlength="50"  /></td>
      </tr>
    </table>
    <table width="650" border="1" style="border-color:#E2E2E2;">
      <tr>
        <td width="277" align="left">PONo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="PO" name="PO"  size="20" maxlength="50" /></td>
        <td width="357"><?php echo date("m/d/y") ?></td> 
      </tr>
    </table>

    <table width="650" border="1" style="border-color:#E2E2E2;">
        <tr>
          <td width="130"><select name="blinds" id="blinds" >
            <option value="">--Select--</option>
            <option value="2quote; Basswood Blinds" >2&quot; Basswood Blinds</option>
            <option value="2quote; Faux Wood Blinds" >2&quot; Faux Wood Blinds</option>
            <option value="2-1/2quote; Basswood Blinds"  >2-1/2&quot; Basswood Blinds</option>
            <option value="2-1/2quote; Faux Wood Blinds" >2-1/2&quot; Faux Wood Blinds</option>
          </select></td>
          <td width="112"><select name="type" id="type" >
            <option value="">--Select--</option>
            <option value="Standard Lift" >Standard Lift</option>
            <option value="Two on One Headrail"  >Two on One Headrail</option>
            <option value="Three on One Headrail"  >Three on One Headrail</option>
          </select></td>
        </tr>
      </table>
      <table width="650" border="1" style="border-color:#E2E2E2;">
        <tr>
          <td width="27"><strong>w:</strong></td>
          <td width="74"><input type="text" id="valwidth" name="valwidth"  size="10" /></td>
          <td width="19"><strong>h:</strong></td>
          <td width="115"><input type="text" id="valheight" name="valheight"  size="10" /></td>
          <td width="98"><strong>Val Width:</strong></td>
          <td width="107"><input type="text" id="vwidth" name="vwidth"  size="10" /></td>
          <td width="36"><strong>mt:</strong></td>
          <td width="122"><select name="mt" id="mt">
            <option value="">--Select--</option>
            <option value="IB" >IB</option>
            <option value="OB" >OB</option>
          </select></td>
        </tr>
      </table>
      <table width="650" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="51">Slat:</td>
          <td width="231"><select name="slat" id="slat" >
            <option value="">--Select--</option>
            <option value="slat">Slat#: 21</option>
          </select></td>
          <td width="346">Color:
            <select name="color" id="color" >
              <option value="">--Select--</option>
              <option value="Alab.Texture" >Alab.Texture</option>
              <option value="Alabaster"  >Alabaster</option>
              <option value="Almond" >Almond</option>
              <option value="Rosewood" >Rosewood</option>
              <option value="Chestnut" >Chestnut</option>
              <option value="Eggshell" >Eggshell</option>
              <option value="Natural" >Natural</option>
              <option value="Pearl Texture" >Pearl Texture</option>
              <option value="Pecan" >Pecan</option>
              <option value="Snow Texture" >Snow Texture</option>
              <option value="Teak" >Teak</option>
              <option value="Cherry" >Cherry</option>
              <option value="Mahogany" >Mahogany</option>
              <option value="Dark Mahogany" >Dark Mahogany</option>
              <option value="Pearl" >Pearl</option>
              <option value="Maple" >Maple</option>
              <option value="White" >White</option>
              <option value="Snow White" >Snow White</option>
              <option value="Bright White" >Bright White</option>
              <option value="Almost White" >Almost White</option>
              <option value="Golden Oak" >Golden Oak</option>
              <option value="Cloud" >Cloud</option>
              <option value="Oyster" >Oyster</option>
              <option value="Espresso">Espresso</option>
              <option value="Black" >Black</option>
              <option value="Bourbon" >Bourbon</option>
              <option value="Chocolate" >Chocolate</option>
              <option value="Walnut">Walnut</option>
            </select></td>
        </tr>
      </table>
      <table width="650" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="138">Valance Type:</td>
          <td width="223"><select name="size" id="size" >
            <option value="">--Select--</option>
            <option value="3-1/4quote Crown"  >3-1/4&quot; Crown</option>
            <option value="3-1/2quote Colonial" >3-1/2&quot; Colonial</option>
            <option value="none" >none</option>
          </select></td>
          <td width="82">RTN:</td>
          <td width="179"><select name="rtn" id="rtn" >
            <option value="">--Select--</option>
            <option value="0"  >0</option>
            <option value="1"  >1</option>
            <option value="2"  >2</option>
          </select></td>
        </tr>
      </table>
      <table width="650" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="38">Tilt:</td>
          <td width="157"><select name="tilt1" id="tilt1" >
            <option value="">--Select--</option>
            <option value="Cord"  >Cord</option>
            <option value="Wand"  >Wand</option>
            <option value="Motor Infrared"  >Motor Infrared</option>
            <option value="Motor RF" >Motor RF</option>
          </select></td>
          <td width="39">Lift:</td>
          <td width="156"><select name="lilt1" id="lilt1" >
            <option value="Cord">Cord</option>
          </select></td>
        </tr>
      </table>
      <table width="600" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="81">Control:</td>
          <td width="503"><select name="control" id="control" >
            <option value="">--Select--</option>
            <option value="L:R T:L"  >Lift Right/Tilt Left</option>
            <option value="L:L T:R"  >Lift Left/Tilt Right</option>
            <option value="L:R T:R"  >Lift Right/Tilt Right</option>
            <option value="L:L T:L"  >Lift Left/Tilt Left</option>
            <option value="Loop-Left"  >Loop-Left</option>
            <option value="Loop-Right"  >Loop-Right</option>
          </select></td>
        </tr>
      </table>
      <table width="650" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="264">Customer: <input type="text" id="customer" name="customer"  size="10" /></td>
        </tr>
      </table>
      <table width="650" height="59" border="0">
        <tr>
          <td width="14.3%" align="center"><input type="button" id="add" name="add" onclick="addblinds();" size="10" value="Add Blinds" style="background-color:#4D4D4D; color:white;"/></td>
        </tr>
    </table></td>
  </tr>
</table>
