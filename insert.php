<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7" />
<title>�������� ���������� ��� �.�.�.</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
body {
	background-color: #FFFACE;
}
.style3 {font-size: 9px}
-->
</style>
<script type='text/JavaScript' src='files/scw.js'></script>
<script language="JavaScript" src="files/gen_validatorv31.js" type="text/javascript"></script>
</head>

<body>
<center>
  <table width="400" border="0">
    <tr>
       <td><div align="center" class="style1">�������� ����������</div></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
</center>
    <form method="POST" action="submit_insert.php"  name="myform">
      <center>
      <table>
        <tr>
        <td>
      <div align="center"><strong>�����:</strong> <input name="firstname" type="text" size="50"/></div><br>
      <div align="center"><strong>�������:</strong> <input name="lastname" type="text" size="50"/></div><br>
      <div align="center"><strong>����� ������:</strong> <input name="fatherfirstname" type="text" size="50"/></div><br>
      <div align="center"><strong>����/��� ��������:</strong> <input type=text name=birthday onclick='scwShow(this,event);' readonly='readonly' size=25> <img src='files/scw.gif' alt='Click Here' onclick="scwShow(scwID('birthday'),event);" /></div><br>
        
        <center>
        <table border="1">
          <tr>
            <td width="100" valign="top">
                <div align="left">
                <strong>����:</strong> <br />
                <input type="radio" name="RadioFylo" value="������" id="RadioGroup1_0" />
                <label>������</label>
                <br />
                <input type="radio" name="RadioFylo" value="�������" id="RadioGroup1_1" />
                <label>�������</label>
                <br /></div></td>
            <td width="380" valign="top"><div align="left"><strong>�������� ��� �.�.�.:</strong> <br />
                <input type="radio" name="RadioWork" value="1" id="RadioGroup5_0" />
                <label>��������� - ������������ ��������� (�.�.�.)</label>
                <br />
                <input type="radio" name="RadioWork" value="2" id="RadioGroup5_1" />
                <label>�������� �� 407/80</label>
                <br />
                <input type="radio" name="RadioWork" value="3" id="RadioGroup5_2" />
                <label>������ - ������� - ������. ��������� (�.�.�.�.)</label>
                <br />
                <input type="radio" name="RadioWork" value="4" id="RadioGroup5_3" />
                <label>������ - ������ - ������. ��������� (�.�.��.�.)</label>
                <br />
                <input type="radio" name="RadioWork" value="5" id="RadioGroup5_4" />
                <label>���������� ���������</label>
                <br />
            </div></td>
          </tr>
        </table>
        </center>
        <br/>
        <center>
		<table border="1">
          <tr>
            <td width="620" valign="top"><div align="center"><strong>����� / ��������: </strong>
                <select class="select" name="Tmhma">
                <option value="">��������...</option>
                <option value="��������� ���������">��������� ���������</option>
                <option value="������������ ���������">������������ ���������</option>
                <option value="�������, ���������� ��� ���������� ������������ �����">�������, ���������� ��� ���������� ������������ �����</option>
                <option value="���������� ��� ����������� ������������� ��� ������� �����">���������� ��� ����������� ������������� ��� ������� �����</option>
                <option value="������� ����������� ������� ��� ���������">������� ����������� ������� ��� ���������</option>
                <option value="��������� ������������">��������� ������������</option>
                <option value="��������� ����������">��������� ����������</option>
                <option value="��������� ������� ������ ��� ����������">��������� ������� ������ ��� ����������</option>
                <option value="��������� ��� ����������� ���� ���������� ������">��������� ��� ����������� ���� ���������� ������</option>
                <option value="������������ ��������� ��� ��������� �����������">������������ ��������� ��� ��������� �����������</option>
                <option value="��������">��������</option>
                <option value="�������� ��� ����������">�������� ��� ����������</option>
                <option value="���������� ���������">���������� ���������</option>
                <option value="������ ��������� (����������, �������� �������, ������� ��������, ���)">������ ��������� (����������, �������� �������, ������� ��������, ���)</option>
                <option value="��������� ��������� ��� ���������">��������� ��������� ��� ���������</option>
                <option value="��������� �������������">��������� �������������</option>
                <option value="�������� ��������� ��� ���������">�������� ��������� ��� ���������</option>
                <option value="�������">�������</option>
                <option value="����������� ����� ��������� �����������">����������� ����� ��������� �����������</option>
                <option value="��������� ���������">��������� ���������</option>
                <option value="��������� ���������">��������� ���������</option>
              </select>
            </div>
            </td>

          </tr>
        </table>
        </center>
        </td>
        </tr>
        </table>
        <br/><br/>
        <table width="200" border="0">
          <tr>
            <td width="90"><div align="center">
              <input type="submit" value="��������" />
            </div></td>
            <td width="100"><div align="center">
              <input type="reset" value="����������" />
            </div></td>
          </tr>
        </table>
    </center>
</form>
<script language="JavaScript" type="text/javascript">
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  frmvalidator.EnableMsgsTogether();
  frmvalidator.addValidation("firstname","req","����������� ����� �� ����� '�����' !");
  frmvalidator.addValidation("lastname","req","����������� ����� �� ����� '�������' !");
  frmvalidator.addValidation("fatherfirstname","req","����������� ����� �� ����� '����� ������' !");
  frmvalidator.addValidation("birthday","req","����������� ����� �� ����� '����/��� ��������' !");
  frmvalidator.addValidation("RadioFylo","selone_radio","�������� ����!");
  frmvalidator.addValidation("RadioWork","selone_radio","�������� �������� ��� �.�.�.!");
  frmvalidator.addValidation("Tmhma","dontselect=0","�������� ����� / ��������!");
      </script>
</body>
</html>
