<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<script language="JavaScript" type="text/javascript">
<!--
function pop_preview()
{
    selected_style = document.post.user_style.options[document.post.user_style.selectedIndex].value;
    preview = window.open(\'' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'viewnews.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&style=\'+selected_style,\'preview\',\'resizable=yes,toolbar=no,status=yes,height=500,width=600,screenX=50,screenY=25,left=100,top=75\')
    preview.focus();
}
//-->
</script>
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_SETTINGS'])) ? $this->_tpldata['.'][0]['F_SETTINGS'] : '') . '" name="post">
<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_NAME'])) ? $this->_tpldata['.'][0]['URI_NAME'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['NAME'])) ? $this->_tpldata['.'][0]['NAME'] : '') . '" />
<input type="hidden" name="user_id[]" value="' . ((isset($this->_tpldata['.'][0]['USER_ID'])) ? $this->_tpldata['.'][0]['USER_ID'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_REGISTRATION_INFORMATION'])) ? $this->_tpldata['.'][0]['L_REGISTRATION_INFORMATION'] : ((isset($user->lang['REGISTRATION_INFORMATION'])) ? $user->lang['REGISTRATION_INFORMATION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REGISTRATION_INFORMATION'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td class="row1" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_REQUIRED_FIELD_NOTE'])) ? $this->_tpldata['.'][0]['L_REQUIRED_FIELD_NOTE'] : ((isset($user->lang['REQUIRED_FIELD_NOTE'])) ? $user->lang['REQUIRED_FIELD_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REQUIRED_FIELD_NOTE'))) . ' 	}')) . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">* ' . ((isset($this->_tpldata['.'][0]['L_USERNAME'])) ? $this->_tpldata['.'][0]['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USERNAME'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="username" size="25" maxlength="30" value="' . ((isset($this->_tpldata['.'][0]['USERNAME'])) ? $this->_tpldata['.'][0]['USERNAME'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_USERNAME'])) ? $this->_tpldata['.'][0]['FV_USERNAME'] : '') . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">* ' . ((isset($this->_tpldata['.'][0]['L_EMAIL_ADDRESS'])) ? $this->_tpldata['.'][0]['L_EMAIL_ADDRESS'] : ((isset($user->lang['EMAIL_ADDRESS'])) ? $user->lang['EMAIL_ADDRESS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EMAIL_ADDRESS'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="user_email" size="30" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['USER_EMAIL'])) ? $this->_tpldata['.'][0]['USER_EMAIL'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_USER_EMAIL'])) ? $this->_tpldata['.'][0]['FV_USER_EMAIL'] : '') . '</td>
  </tr>
  ';// IF S_CURRENT_PASSWORD
if ($this->_tpldata['.'][0]['S_CURRENT_PASSWORD']) { 
echo '
  <tr>
    <td width="40%" class="row2">* ' . ((isset($this->_tpldata['.'][0]['L_CURRENT_PASSWORD'])) ? $this->_tpldata['.'][0]['L_CURRENT_PASSWORD'] : ((isset($user->lang['CURRENT_PASSWORD'])) ? $user->lang['CURRENT_PASSWORD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT_PASSWORD'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_CURRENT_PASSWORD_NOTE'])) ? $this->_tpldata['.'][0]['L_CURRENT_PASSWORD_NOTE'] : ((isset($user->lang['CURRENT_PASSWORD_NOTE'])) ? $user->lang['CURRENT_PASSWORD_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT_PASSWORD_NOTE'))) . ' 	}')) . '</span></td>
    <td width="60%" class="row1"><input type="password" name="user_password" size="25" maxlength="100" value="" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_PASSWORD'])) ? $this->_tpldata['.'][0]['FV_PASSWORD'] : '') . '</td>
  </tr>
  ';// ENDIF
}
// IF S_NEW_PASSWORD
if ($this->_tpldata['.'][0]['S_NEW_PASSWORD']) { 
echo '
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_NEW_PASSWORD'])) ? $this->_tpldata['.'][0]['L_NEW_PASSWORD'] : ((isset($user->lang['NEW_PASSWORD'])) ? $user->lang['NEW_PASSWORD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NEW_PASSWORD'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_NEW_PASSWORD_NOTE'])) ? $this->_tpldata['.'][0]['L_NEW_PASSWORD_NOTE'] : ((isset($user->lang['NEW_PASSWORD_NOTE'])) ? $user->lang['NEW_PASSWORD_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NEW_PASSWORD_NOTE'))) . ' 	}')) . '</span></td>
    <td width="60%" class="row1"><input type="password" name="new_user_password1" size="25" maxlength="100" value="" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_NEW_PASSWORD'])) ? $this->_tpldata['.'][0]['FV_NEW_PASSWORD'] : '') . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_CONFIRM_PASSWORD'])) ? $this->_tpldata['.'][0]['L_CONFIRM_PASSWORD'] : ((isset($user->lang['CONFIRM_PASSWORD'])) ? $user->lang['CONFIRM_PASSWORD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CONFIRM_PASSWORD'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_CONFIRM_PASSWORD_NOTE'])) ? $this->_tpldata['.'][0]['L_CONFIRM_PASSWORD_NOTE'] : ((isset($user->lang['CONFIRM_PASSWORD_NOTE'])) ? $user->lang['CONFIRM_PASSWORD_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CONFIRM_PASSWORD_NOTE'))) . ' 	}')) . '</span></td>
    <td width="60%" class="row1"><input type="password" name="new_user_password2" size="25" maxlength="100" value="" class="input" /></td>
  </tr>
  ';// ELSE
} else {
echo '
  <tr>
    <td width="40%" class="row2">* ' . ((isset($this->_tpldata['.'][0]['L_PASSWORD'])) ? $this->_tpldata['.'][0]['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PASSWORD'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="password" name="user_password1" size="25" maxlength="100" value="" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_USER_PASSWORD'])) ? $this->_tpldata['.'][0]['FV_USER_PASSWORD'] : '') . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">* ' . ((isset($this->_tpldata['.'][0]['L_CONFIRM_PASSWORD'])) ? $this->_tpldata['.'][0]['L_CONFIRM_PASSWORD'] : ((isset($user->lang['CONFIRM_PASSWORD'])) ? $user->lang['CONFIRM_PASSWORD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CONFIRM_PASSWORD'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="password" name="user_password2" size="25" maxlength="100" value="" class="input" /></td>
  </tr>
  ';// ENDIF
}
echo '
</table>
<br />

';echo '<!-- add userinfos -->';echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_ADDINFOS'])) ? $this->_tpldata['.'][0]['L_ADDINFOS'] : ((isset($user->lang['ADDINFOS'])) ? $user->lang['ADDINFOS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDINFOS'))) . ' 	}')) . '</th>
  </tr>

  <tr>
    <td class="row1" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_REQUIRED_FIELD_NOTE'])) ? $this->_tpldata['.'][0]['L_REQUIRED_FIELD_NOTE'] : ((isset($user->lang['REQUIRED_FIELD_NOTE'])) ? $user->lang['REQUIRED_FIELD_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REQUIRED_FIELD_NOTE'))) . ' 	}')) . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">* ' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_FIRST_NAME'])) ? $this->_tpldata['.'][0]['L_ADDUSER_FIRST_NAME'] : ((isset($user->lang['ADDUSER_FIRST_NAME'])) ? $user->lang['ADDUSER_FIRST_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_FIRST_NAME'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="first_name" size="25" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['FIRST_NAME'])) ? $this->_tpldata['.'][0]['FIRST_NAME'] : '') . '" class="input" /> ' . ((isset($this->_tpldata['.'][0]['FV_FIRST_NAME'])) ? $this->_tpldata['.'][0]['FV_FIRST_NAME'] : '') . ' </td>
  </tr>  
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_LAST_NAME'])) ? $this->_tpldata['.'][0]['L_ADDUSER_LAST_NAME'] : ((isset($user->lang['ADDUSER_LAST_NAME'])) ? $user->lang['ADDUSER_LAST_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_LAST_NAME'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="last_name" size="25" maxlength="30" value="' . ((isset($this->_tpldata['.'][0]['LAST_NAME'])) ? $this->_tpldata['.'][0]['LAST_NAME'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0][''])) ? $this->_tpldata['.'][0][''] : '') . '</td>
  </tr>
  
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_GENDER'])) ? $this->_tpldata['.'][0]['L_ADDUSER_GENDER'] : ((isset($user->lang['ADDUSER_GENDER'])) ? $user->lang['ADDUSER_GENDER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_GENDER'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"> 
    	<select name="gender" class="input">
        ';// BEGIN gender_row
$_gender_row_count = (isset($this->_tpldata['gender_row.'])) ?  sizeof($this->_tpldata['gender_row.']) : 0;
if ($_gender_row_count) {
for ($_gender_row_i = 0; $_gender_row_i < $_gender_row_count; $_gender_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['gender_row.'][$_gender_row_i]['VALUE'])) ? $this->_tpldata['gender_row.'][$_gender_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['gender_row.'][$_gender_row_i]['SELECTED'])) ? $this->_tpldata['gender_row.'][$_gender_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['gender_row.'][$_gender_row_i]['OPTION'])) ? $this->_tpldata['gender_row.'][$_gender_row_i]['OPTION'] : '') . '</option>
        ';}}
// END gender_row
echo '
      </select>
      ' . ((isset($this->_tpldata['.'][0]['FV_GENDER'])) ? $this->_tpldata['.'][0]['FV_GENDER'] : '') . '	
    </td>
  </tr>   
  <tr>
    <td width="40%" class="row2">* ' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_COUNTRY'])) ? $this->_tpldata['.'][0]['L_ADDUSER_COUNTRY'] : ((isset($user->lang['ADDUSER_COUNTRY'])) ? $user->lang['ADDUSER_COUNTRY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_COUNTRY'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1">
        	<select name="country" class="input">
        ';// BEGIN country_row
$_country_row_count = (isset($this->_tpldata['country_row.'])) ?  sizeof($this->_tpldata['country_row.']) : 0;
if ($_country_row_count) {
for ($_country_row_i = 0; $_country_row_i < $_country_row_count; $_country_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['country_row.'][$_country_row_i]['VALUE'])) ? $this->_tpldata['country_row.'][$_country_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['country_row.'][$_country_row_i]['SELECTED'])) ? $this->_tpldata['country_row.'][$_country_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['country_row.'][$_country_row_i]['OPTION'])) ? $this->_tpldata['country_row.'][$_country_row_i]['OPTION'] : '') . '</option>
        ';}}
// END country_row
echo '
      </select>
      ' . ((isset($this->_tpldata['.'][0]['FV_COUNTRY'])) ? $this->_tpldata['.'][0]['FV_COUNTRY'] : '') . '	
    </td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_TOWN'])) ? $this->_tpldata['.'][0]['L_ADDUSER_TOWN'] : ((isset($user->lang['ADDUSER_TOWN'])) ? $user->lang['ADDUSER_TOWN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_TOWN'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="town" size="30" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['TOWN'])) ? $this->_tpldata['.'][0]['TOWN'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0][''])) ? $this->_tpldata['.'][0][''] : '') . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_STATE'])) ? $this->_tpldata['.'][0]['L_ADDUSER_STATE'] : ((isset($user->lang['ADDUSER_STATE'])) ? $user->lang['ADDUSER_STATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_STATE'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="state" size="25" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['STATE'])) ? $this->_tpldata['.'][0]['STATE'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0][''])) ? $this->_tpldata['.'][0][''] : '') . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_ZIP_CODE'])) ? $this->_tpldata['.'][0]['L_ADDUSER_ZIP_CODE'] : ((isset($user->lang['ADDUSER_ZIP_CODE'])) ? $user->lang['ADDUSER_ZIP_CODE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_ZIP_CODE'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="ZIP_code" size="25" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['ZIP_CODE'])) ? $this->_tpldata['.'][0]['ZIP_CODE'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0][''])) ? $this->_tpldata['.'][0][''] : '') . '</td>
  </tr>  
  ';// IF IS_USER
if ($this->_tpldata['.'][0]['IS_USER']) { 
echo '
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_PHONE'])) ? $this->_tpldata['.'][0]['L_ADDUSER_PHONE'] : ((isset($user->lang['ADDUSER_PHONE'])) ? $user->lang['ADDUSER_PHONE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_PHONE'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_FONEINFO'])) ? $this->_tpldata['.'][0]['L_ADDUSER_FONEINFO'] : ((isset($user->lang['ADDUSER_FONEINFO'])) ? $user->lang['ADDUSER_FONEINFO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_FONEINFO'))) . ' 	}')) . '</span></td>
    <td width="60%" class="row1"><input type="text" name="phone" size="25" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['PHONE'])) ? $this->_tpldata['.'][0]['PHONE'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_CELLPHONE'])) ? $this->_tpldata['.'][0]['L_ADDUSER_CELLPHONE'] : ((isset($user->lang['ADDUSER_CELLPHONE'])) ? $user->lang['ADDUSER_CELLPHONE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_CELLPHONE'))) . ' 	}')) . ':<br><span class="small">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_FONEINFO'])) ? $this->_tpldata['.'][0]['L_ADDUSER_FONEINFO'] : ((isset($user->lang['ADDUSER_FONEINFO'])) ? $user->lang['ADDUSER_FONEINFO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_FONEINFO'))) . ' 	}')) . '</span> </td>
    <td width="60%" class="row1"><input type="text" name="cellphone" size="25" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['CELLPHONE'])) ? $this->_tpldata['.'][0]['CELLPHONE'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0][''])) ? $this->_tpldata['.'][0][''] : '') . '</td>
  </tr>
   ';// ENDIF
}
echo '
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_ADDRESS'])) ? $this->_tpldata['.'][0]['L_ADDUSER_ADDRESS'] : ((isset($user->lang['ADDUSER_ADDRESS'])) ? $user->lang['ADDUSER_ADDRESS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_ADDRESS'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="address" size="25" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['ADDRESS'])) ? $this->_tpldata['.'][0]['ADDRESS'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_ALLVATAR_NICK'])) ? $this->_tpldata['.'][0]['L_ADDUSER_ALLVATAR_NICK'] : ((isset($user->lang['ADDUSER_ALLVATAR_NICK'])) ? $user->lang['ADDUSER_ALLVATAR_NICK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_ALLVATAR_NICK'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="allvatar_nick" size="25" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['ALLVATAR_NICK'])) ? $this->_tpldata['.'][0]['ALLVATAR_NICK'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_ICQ'])) ? $this->_tpldata['.'][0]['L_ADDUSER_ICQ'] : ((isset($user->lang['ADDUSER_ICQ'])) ? $user->lang['ADDUSER_ICQ'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_ICQ'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="icq" size="25" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['ICQ'])) ? $this->_tpldata['.'][0]['ICQ'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_SKYPE'])) ? $this->_tpldata['.'][0]['L_ADDUSER_SKYPE'] : ((isset($user->lang['ADDUSER_SKYPE'])) ? $user->lang['ADDUSER_SKYPE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_SKYPE'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="skype" size="25" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['SKYPE'])) ? $this->_tpldata['.'][0]['SKYPE'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_MSN'])) ? $this->_tpldata['.'][0]['L_ADDUSER_MSN'] : ((isset($user->lang['ADDUSER_MSN'])) ? $user->lang['ADDUSER_MSN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_MSN'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="msn" size="25" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['MSN'])) ? $this->_tpldata['.'][0]['MSN'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_IRQ'])) ? $this->_tpldata['.'][0]['L_ADDUSER_IRQ'] : ((isset($user->lang['ADDUSER_IRQ'])) ? $user->lang['ADDUSER_IRQ'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_IRQ'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="irq" size="25" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['IRQ'])) ? $this->_tpldata['.'][0]['IRQ'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADDUSER_BIRTHDAY'])) ? $this->_tpldata['.'][0]['L_ADDUSER_BIRTHDAY'] : ((isset($user->lang['ADDUSER_BIRTHDAY'])) ? $user->lang['ADDUSER_BIRTHDAY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDUSER_BIRTHDAY'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1">' . ((isset($this->_tpldata['.'][0]['BIRTHDAY'])) ? $this->_tpldata['.'][0]['BIRTHDAY'] : '') . '</td>
  </tr>
 ';// IF IS_USER
if ($this->_tpldata['.'][0]['IS_USER']) { 
echo '
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_USER_PRIV'])) ? $this->_tpldata['.'][0]['L_USER_PRIV'] : ((isset($user->lang['USER_PRIV'])) ? $user->lang['USER_PRIV'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USER_PRIV'))) . ' 	}')) . '</th>
  </tr>  
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_USER_PRIV_SET_GLOBAL'])) ? $this->_tpldata['.'][0]['L_USER_PRIV_SET_GLOBAL'] : ((isset($user->lang['USER_PRIV_SET_GLOBAL'])) ? $user->lang['USER_PRIV_SET_GLOBAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USER_PRIV_SET_GLOBAL'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"> 
        <select name="priv_set" class="input">
        	';// BEGIN priv_row
$_priv_row_count = (isset($this->_tpldata['priv_row.'])) ?  sizeof($this->_tpldata['priv_row.']) : 0;
if ($_priv_row_count) {
for ($_priv_row_i = 0; $_priv_row_i < $_priv_row_count; $_priv_row_i++)
{
echo '
        		<option value="' . ((isset($this->_tpldata['priv_row.'][$_priv_row_i]['VALUE'])) ? $this->_tpldata['priv_row.'][$_priv_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['priv_row.'][$_priv_row_i]['SELECTED'])) ? $this->_tpldata['priv_row.'][$_priv_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['priv_row.'][$_priv_row_i]['OPTION'])) ? $this->_tpldata['priv_row.'][$_priv_row_i]['OPTION'] : '') . '</option>
        	';}}
// END priv_row
echo '
      </select>    
    </td>
  </tr>    
<tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_USER_PRIV_TEL_ALL'])) ? $this->_tpldata['.'][0]['L_USER_PRIV_TEL_ALL'] : ((isset($user->lang['USER_PRIV_TEL_ALL'])) ? $user->lang['USER_PRIV_TEL_ALL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USER_PRIV_TEL_ALL'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"> <input type="checkbox" name="priv_tel_all" value="1" class="input" ' . ((isset($this->_tpldata['.'][0]['PRIV_TEL_ALL'])) ? $this->_tpldata['.'][0]['PRIV_TEL_ALL'] : '') . ' /></td>
</tr>  
<tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_USER_PRIV_TEL_CRIPT'])) ? $this->_tpldata['.'][0]['L_USER_PRIV_TEL_CRIPT'] : ((isset($user->lang['USER_PRIV_TEL_CRIPT'])) ? $user->lang['USER_PRIV_TEL_CRIPT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USER_PRIV_TEL_CRIPT'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"> <input type="checkbox" name="priv_tel_cript" value="1" class="input" ' . ((isset($this->_tpldata['.'][0]['PRIV_TEL_CRIPT'])) ? $this->_tpldata['.'][0]['PRIV_TEL_CRIPT'] : '') . ' /></td>
</tr>  
<tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_USER_PRIV_TEL_SMS'])) ? $this->_tpldata['.'][0]['L_USER_PRIV_TEL_SMS'] : ((isset($user->lang['USER_PRIV_TEL_SMS'])) ? $user->lang['USER_PRIV_TEL_SMS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USER_PRIV_TEL_SMS'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"> <input type="checkbox" name="priv_nosms" value="1" class="input" ' . ((isset($this->_tpldata['.'][0]['PRIV_NOSMS'])) ? $this->_tpldata['.'][0]['PRIV_NOSMS'] : '') . '/></td>
  </tr>  
   ';// ENDIF
}
echo '  
</table>
<br />      
           
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_PREFERENCES'])) ? $this->_tpldata['.'][0]['L_PREFERENCES'] : ((isset($user->lang['PREFERENCES'])) ? $user->lang['PREFERENCES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PREFERENCES'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENTS_PER_PAGE'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENTS_PER_PAGE'] : ((isset($user->lang['ADJUSTMENTS_PER_PAGE'])) ? $user->lang['ADJUSTMENTS_PER_PAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENTS_PER_PAGE'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="user_alimit" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['USER_ALIMIT'])) ? $this->_tpldata['.'][0]['USER_ALIMIT'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_USER_ALIMIT'])) ? $this->_tpldata['.'][0]['FV_USER_ALIMIT'] : '') . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_EVENTS_PER_PAGE'])) ? $this->_tpldata['.'][0]['L_EVENTS_PER_PAGE'] : ((isset($user->lang['EVENTS_PER_PAGE'])) ? $user->lang['EVENTS_PER_PAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EVENTS_PER_PAGE'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="user_elimit" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['USER_ELIMIT'])) ? $this->_tpldata['.'][0]['USER_ELIMIT'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_USER_ELIMIT'])) ? $this->_tpldata['.'][0]['FV_USER_ELIMIT'] : '') . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ITEMS_PER_PAGE'])) ? $this->_tpldata['.'][0]['L_ITEMS_PER_PAGE'] : ((isset($user->lang['ITEMS_PER_PAGE'])) ? $user->lang['ITEMS_PER_PAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMS_PER_PAGE'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="user_ilimit" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['USER_ILIMIT'])) ? $this->_tpldata['.'][0]['USER_ILIMIT'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_USER_ILIMIT'])) ? $this->_tpldata['.'][0]['FV_USER_ILIMIT'] : '') . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_NEWS_PER_PAGE'])) ? $this->_tpldata['.'][0]['L_NEWS_PER_PAGE'] : ((isset($user->lang['NEWS_PER_PAGE'])) ? $user->lang['NEWS_PER_PAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NEWS_PER_PAGE'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="user_nlimit" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['USER_NLIMIT'])) ? $this->_tpldata['.'][0]['USER_NLIMIT'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_USER_NLIMIT'])) ? $this->_tpldata['.'][0]['FV_USER_NLIMIT'] : '') . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_RAIDS_PER_PAGE'])) ? $this->_tpldata['.'][0]['L_RAIDS_PER_PAGE'] : ((isset($user->lang['RAIDS_PER_PAGE'])) ? $user->lang['RAIDS_PER_PAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_PER_PAGE'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="user_rlimit" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['USER_RLIMIT'])) ? $this->_tpldata['.'][0]['USER_RLIMIT'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_USER_RLIMIT'])) ? $this->_tpldata['.'][0]['FV_USER_RLIMIT'] : '') . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_LANGUAGE'])) ? $this->_tpldata['.'][0]['L_LANGUAGE'] : ((isset($user->lang['LANGUAGE'])) ? $user->lang['LANGUAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LANGUAGE'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1">
      <select name="user_lang" class="input">
        ';// BEGIN lang_row
$_lang_row_count = (isset($this->_tpldata['lang_row.'])) ?  sizeof($this->_tpldata['lang_row.']) : 0;
if ($_lang_row_count) {
for ($_lang_row_i = 0; $_lang_row_i < $_lang_row_count; $_lang_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['lang_row.'][$_lang_row_i]['VALUE'])) ? $this->_tpldata['lang_row.'][$_lang_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['lang_row.'][$_lang_row_i]['SELECTED'])) ? $this->_tpldata['lang_row.'][$_lang_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['lang_row.'][$_lang_row_i]['OPTION'])) ? $this->_tpldata['lang_row.'][$_lang_row_i]['OPTION'] : '') . '</option>
        ';}}
// END lang_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_STYLE'])) ? $this->_tpldata['.'][0]['L_STYLE'] : ((isset($user->lang['STYLE'])) ? $user->lang['STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STYLE'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1">
      <select name="user_style" class="input">
        ';// BEGIN style_row
$_style_row_count = (isset($this->_tpldata['style_row.'])) ?  sizeof($this->_tpldata['style_row.']) : 0;
if ($_style_row_count) {
for ($_style_row_i = 0; $_style_row_i < $_style_row_count; $_style_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['style_row.'][$_style_row_i]['VALUE'])) ? $this->_tpldata['style_row.'][$_style_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['style_row.'][$_style_row_i]['SELECTED'])) ? $this->_tpldata['style_row.'][$_style_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['style_row.'][$_style_row_i]['OPTION'])) ? $this->_tpldata['style_row.'][$_style_row_i]['OPTION'] : '') . '</option>
        ';}}
// END style_row
echo '
      </select>
      &nbsp;&nbsp; (<a href="javascript:pop_preview()">' . ((isset($this->_tpldata['.'][0]['L_PREVIEW'])) ? $this->_tpldata['.'][0]['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PREVIEW'))) . ' 	}')) . '</a>)
    </td>
  </tr>
  ';// IF S_SETTING_ADMIN
if ($this->_tpldata['.'][0]['S_SETTING_ADMIN']) { 
echo '
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_PERMISSIONS'])) ? $this->_tpldata['.'][0]['L_PERMISSIONS'] : ((isset($user->lang['PERMISSIONS'])) ? $user->lang['PERMISSIONS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PERMISSIONS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td colspan="2" class="row1">' . ((isset($this->_tpldata['.'][0]['L_S_ADMIN_NOTE'])) ? $this->_tpldata['.'][0]['L_S_ADMIN_NOTE'] : ((isset($user->lang['S_ADMIN_NOTE'])) ? $user->lang['S_ADMIN_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'S_ADMIN_NOTE'))) . ' 	}')) . '</td>
  </tr>
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ACCOUNT_ENABLED'])) ? $this->_tpldata['.'][0]['L_ACCOUNT_ENABLED'] : ((isset($user->lang['ACCOUNT_ENABLED'])) ? $user->lang['ACCOUNT_ENABLED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ACCOUNT_ENABLED'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><span class="small"><input type="radio" name="user_active" value="1"' . ((isset($this->_tpldata['.'][0]['USER_ACTIVE_YES_CHECKED'])) ? $this->_tpldata['.'][0]['USER_ACTIVE_YES_CHECKED'] : '') . ' /> ' . ((isset($this->_tpldata['.'][0]['L_YES'])) ? $this->_tpldata['.'][0]['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'YES'))) . ' 	}')) . '&nbsp;&nbsp;<input type="radio" name="user_active" value="0"' . ((isset($this->_tpldata['.'][0]['USER_ACTIVE_NO_CHECKED'])) ? $this->_tpldata['.'][0]['USER_ACTIVE_NO_CHECKED'] : '') . ' /> ' . ((isset($this->_tpldata['.'][0]['L_NO'])) ? $this->_tpldata['.'][0]['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NO'))) . ' 	}')) . '</span></td>
  </tr>
 ';// BEGIN permissions_row
$_permissions_row_count = (isset($this->_tpldata['permissions_row.'])) ?  sizeof($this->_tpldata['permissions_row.']) : 0;
if ($_permissions_row_count) {
for ($_permissions_row_i = 0; $_permissions_row_i < $_permissions_row_count; $_permissions_row_i++)
{
echo '
 <tr>
   <th width="40%" colspan="2">' . ((isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['GROUP'])) ? $this->_tpldata['permissions_row.'][$_permissions_row_i]['GROUP'] : '') . ':</td>
</tr>
<tr>
   <td width="60%" class="row2" colspan="2" >
     ';// BEGIN check_group
$_check_group_count = (isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'])) ? sizeof($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.']) : 0;
if ($_check_group_count) {
for ($_check_group_i = 0; $_check_group_i < $_check_group_count; $_check_group_i++)
{
echo '
     <div style="float:left"><input type="checkbox" name="' . ((isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" value="Y"' . ((isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'])) ? $this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'] : '') . ' />
     <span class="small">' . ((isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'])) ? $this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'] : '') . '</span></div>
     ';}}
// END check_group
echo '
   </td>
 </tr>
 ';}}
// END permissions_row
// ENDIF
}
// IF S_MU_TABLE
if ($this->_tpldata['.'][0]['S_MU_TABLE']) { 
echo '
</table>
<br />

<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<tr>
<th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_ASSOCIATED_MEMBERS'])) ? $this->_tpldata['.'][0]['L_ASSOCIATED_MEMBERS'] : ((isset($user->lang['ASSOCIATED_MEMBERS'])) ? $user->lang['ASSOCIATED_MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ASSOCIATED_MEMBERS'))) . ' 	}')) . '</th>
</tr>
<tr>
<td width="40%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_MEMBERS'])) ? $this->_tpldata['.'][0]['L_MEMBERS'] : ((isset($user->lang['MEMBERS'])) ? $user->lang['MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMBERS'))) . ' 	}')) . '</td>
<td width="60%" class="row1">
<select name="member_id[]" multiple="multiple" size="10" class="input">
';// BEGIN member_row
$_member_row_count = (isset($this->_tpldata['member_row.'])) ?  sizeof($this->_tpldata['member_row.']) : 0;
if ($_member_row_count) {
for ($_member_row_i = 0; $_member_row_i < $_member_row_count; $_member_row_i++)
{
echo '
<option value="' . ((isset($this->_tpldata['member_row.'][$_member_row_i]['VALUE'])) ? $this->_tpldata['member_row.'][$_member_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['member_row.'][$_member_row_i]['SELECTED'])) ? $this->_tpldata['member_row.'][$_member_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['member_row.'][$_member_row_i]['OPTION'])) ? $this->_tpldata['member_row.'][$_member_row_i]['OPTION'] : '') . '</option>
';}}
// END member_row
echo '
</select>
' . ((isset($this->_tpldata['.'][0]['FV_MEMBER_ID'])) ? $this->_tpldata['.'][0]['FV_MEMBER_ID'] : '') . '
</td>
</tr>
';// ENDIF
}
echo '
  <tr>
    <th colspan="2" align="center"><input type="submit" name="submit" value="' . ((isset($this->_tpldata['.'][0]['L_SUBMIT'])) ? $this->_tpldata['.'][0]['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT'))) . ' 	}')) . '" class="mainoption" /> <input type="reset" name="reset" value="' . ((isset($this->_tpldata['.'][0]['L_RESET'])) ? $this->_tpldata['.'][0]['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET'))) . ' 	}')) . '" class="liteoption" />

    	';// IF REGISTER 
if ($this->_tpldata['.'][0]['REGISTER']) { 
// ELSE
} else {
echo '
      <input type="submit" name="delete" value="' . ((isset($this->_tpldata['.'][0]['L_DELETE'])) ? $this->_tpldata['.'][0]['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE'))) . ' 	}')) . '" class="mainoption" />
    ';// ENDIF
}
echo '

    </th>
  </tr>
</table>
</form>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>