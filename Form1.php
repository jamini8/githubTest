<!doctype html>
<!-- this is my branch.get out from it -->

<!-- this is my branch.get out from it.master -->
<?php
$host="localhost";
$user = "root";
$password = "";
$database = "moh";

$NIC="";
$BloodGroup="";
$BMI="";
$height="";
$allergies="";
$Name_of_the_mother="";
$Name_of_the_Hospital_Clinic="";
$age="";
$Name_of_the_Consultant_Obstetrician="";
$Name_of_the_field_Clinic="";
$GramaNiladariDivision="";
$RegistrationNoEligibleFamilyRegister="";
$RegistrationDateEligibleFamilyRegister="";
$RegistrationNoPregnantmothersRegister="";
$RegistrationDatePregnantmothersRegister="";
$IdentifiedAntenatalRiskConditionsModifiers="";
$consanguinity="";
$RubellaImmunization="";
$PrePregnancyScreeningDone="";
$PreconceptionalFolicAcid="";
$Planed_pregnancy_or_not="";
$Historyofsubfertility="";
$Family_planing_method_last_used="";
$G="";
$P="";
$C="";
$AgeOfYoungestChild="";
$LRMP="";
$EDD="";
$US_corrected_EDD="";
$POA_at_dating_Scan="";
$Date_of_Quickening="";
$POA_at_Registration="";

//connect to mysql database
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $connect = mysqli_connect($host, $user, $password, $database);
    
}catch(Exception $ex){
    echo 'Error in connecting';
}

//get data from the form
function getData(){
    $data=array();
    $data[0]=$_POST['NIC'];
    $data[1]=$_POST['BloodGroup'];
    $data[2]=$_POST['BMI'];
    $data[3]=$_POST['height'];
    $data[4]=$_POST['allergies'];
    $data[5]=$_POST['Name_of_the_mother'];
    $data[6]=$_POST['Name_of_the_Hospital_Clinic'];
    $data[7]=$_POST['age'];
    $data[8]=$_POST['Name_of_the_Consultant_Obstetrician'];
    $data[9]=$_POST['Name_of_the_field_Clinic'];
    $data[10]=$_POST['GramaNiladariDivision'];
    $data[11]=$_POST['RegistrationNoEligibleFamilyRegister'];
    $data[12]=$_POST['RegistrationDateEligibleFamilyRegister'];
    $data[13]=$_POST['RegistrationNoPregnantmothersRegister'];
    $data[14]=$_POST['RegistrationDatePregnantmothersRegister'];
    $data[15]=$_POST['IdentifiedAntenatalRiskConditionsModifiers'];
    $data[16]=$_POST['consanguinity'];
    $data[17]=$_POST['RubellaImmunization'];
    $data[18]=$_POST['PrePregnancyScreeningDone'];
    $data[19]=$_POST['PreconceptionalFolicAcid'];
    $data[20]=$_POST['Planed_pregnancy_or_not'];
    $data[21]=$_POST['Historyofsubfertility'];
    $data[22]=$_POST['Family_planing_method_last_used'];
    $data[23]=$_POST['G'];
    $data[24]=$_POST['P'];
    $data[25]=$_POST['C'];
    $data[26]=$_POST['AgeOfYoungestChild'];
    $data[27]=$_POST['LRMP'];
    $data[28]=$_POST['EDD'];
    $data[29]=$_POST['US_corrected_EDD'];
    $data[30]=$_POST['POA_at_dating_Scan'];
    $data[31]=$_POST['Date_of_Quickening'];
    $data[32]=$_POST['POA_at_Registration'];
    
    return $data;
}

//search
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM `data` WHERE NIC='$info[0]'";
    $search_result=mysqli_query($connect,$search_query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
        
                        $NIC=$row['NIC'];
                        $BloodGroup=$row['BloodGroup'];
                        $BMI=$row['BMI'];
                        $height=$row['height'];
                        $allergies=$row['allergies'];
                        $Name_of_the_mother=$row['Name_of_the_mother'];
                        $Name_of_the_Hospital_Clinic=$row['Name_of_the_Hospital_Clinic'];
                        $age=$row['age'];
                        $Name_of_the_Consultant_Obstetrician=$row['Name_of_the_Consultant_Obstetrician'];
                        $Name_of_the_field_Clinic=$row['Name_of_the_field_Clinic'];
                        $GramaNiladariDivision=$row['GramaNiladariDivision'];
                        $RegistrationNoEligibleFamilyRegister=$row['RegistrationNoEligibleFamilyRegister'];
                        $RegistrationDateEligibleFamilyRegister=$row['RegistrationDateEligibleFamilyRegister'];
                        $RegistrationNoPregnantmothersRegister=$row['RegistrationNoPregnantmothersRegister'];
                        $RegistrationDatePregnantmothersRegister=$row['RegistrationDatePregnantmothersRegister'];
                        $IdentifiedAntenatalRiskConditionsModifiers=$row['IdentifiedAntenatalRiskConditionsModifiers'];
                        $consanguinity=$row['consanguinity'];
                        $RubellaImmunization=$row['RubellaImmunization'];
                        $PrePregnancyScreeningDone=$row['PrePregnancyScreeningDone'];
                        $PreconceptionalFolicAcid=$row['PreconceptionalFolicAcid'];
                        $Planed_pregnancy_or_not=$row['Planed_pregnancy_or_not'];
                        $Historyofsubfertility=$row['Historyofsubfertility'];
                        $Family_planing_method_last_used=$row['Family_planing_method_last_used'];
                        $G=$row['G'];
                        $P=$row['P'];
                        $C=$row['C'];
                        $AgeOfYoungestChild=$row['AgeOfYoungestChild'];
                        $LRMP=$row['LRMP'];
                        $EDD=$row['EDD'];
                        $US_corrected_EDD=$row['US_corrected_EDD'];
                        $POA_at_dating_Scan=$row['POA_at_dating_Scan'];
                        $POA_at_dating_Scan_1=$row['rty'];
                
                    }
                }else{
                    echo("no data are available");
                }
        }else{
            echo("result error");
        }
    }
}


//insert
if(isset($_POST['Insert'])){
    $info=getData();
    $insert_query="INSERT INTO `data`(`NIC`, `BloodGroup`, `BMI`, `height`, `allergies`, `Name_of_the_mother`, `Name_of_the_Hospital_Clinic`,
     `age`, `Name_of_the_Consultant_Obstetrician`, `Name_of_the_field_Clinic`, `GramaNiladariDivision`, `RegistrationNoEligibleFamilyRegister`, 
     `RegistrationDateEligibleFamilyRegister`, `RegistrationNoPregnantmothersRegister`, `RegistrationDatePregnantmothersRegister`, 
     `IdentifiedAntenatalRiskConditionsModifiers`, `consanguinity`, `RubellaImmunization`, `PrePregnancyScreeningDone`, `PreconceptionalFolicAcid`, 
     `Planed_pregnancy_or_not`, `Historyofsubfertility`, `Family_planing_method_last_used`, `G`, `P`, `C`, `AgeOfYoungestChild`, `LRMP`, `EDD`, 
     `US_corrected_EDD`, `POA_at_dating_Scan`, `Date_of_Quickening`, `POA_at_Registration`) 
    VALUES ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]','$info[11]','$info[12]'
         ,'$info[13]','$info[14]','$info[15]','$info[16]','$info[17]','$info[18]','$info[19]','$info[20]','$info[21]','$info[22]','$info[23]','$info[24]','$info[25]'
         ,'$info[26]','$info[27]','$info[28]','$info[29]','$info[30]','$info[31]','$info[32]')";
    try{
        $insert_result=mysqli_query($connect,$insert_query);
        if($insert_result){
            if(mysqli_affected_rows($connect)>0){
                echo("data inserted successfully");

            }else{
                echo("data are not inserted");
            }
        }
    }catch(Exception $ex){
        echo("error inserted".$ex->getMessage());
    }
}

//update
if(isset($_POST['Update'])){
    $info=getData();
    $update_query="UPDATE `data` SET `NIC`='$info[0]',`BloodGroup`='$info[1]',`BMI`='$info[2]',`height`='$info[3]',`allergies`='$info[4]',
    `Name_of_the_mother`='$info[5]',`Name_of_the_Hospital_Clinic`='$info[6]',`age`='$info[7]',`Name_of_the_Consultant_Obstetrician`='$info[8]',
    `Name_of_the_field_Clinic`='$info[9]',`GramaNiladariDivision`='$info[10]',`RegistrationNoEligibleFamilyRegister`='$info[11]',
    `RegistrationDateEligibleFamilyRegister`='$info[12]',`RegistrationNoPregnantmothersRegister`='$info[13]',
    `RegistrationDatePregnantmothersRegister`='$info[14]',`IdentifiedAntenatalRiskConditionsModifiers`='$info[15]',`consanguinity`='$info[16]',
    `RubellaImmunization`='$info[17]',`PrePregnancyScreeningDone`='$info[18]',`PreconceptionalFolicAcid`='$info[19]',
    `Planed_pregnancy_or_not`='$info[20]',`Historyofsubfertility`='$info[21]',`Family_planing_method_last_used`='$info[22]',
    `G`='$info[23]',`P`='$info[24]',`C`='$info[25]',`AgeOfYoungestChild`='$info[26]',`LRMP`='$info[27]',`EDD`='$info[28]',
    `US_corrected_EDD`='$info[29]',`POA_at_dating_Scan`='$info[30]',`Date_of_Quickening`='$info[31]',`POA_at_Registration`='$info[32]' 
    WHERE NIC='$info[0]'";

    try{
        $pdate_result=mysqli_query($connect,$update_query);
        if($pdate_result){
            if(mysqli_affected_rows($connect)>0){
                echo("data updated");
            }else{
                echo("data not updated");
            }
        }
    }catch(Exception $ex){
        echo("error in update".$ex->getMessage());
    }
}


?>

<html>
<head>
<meta charset="UTF-8">
<title>Form-1</title>
</head>


<body>
<h1>ගර්භණී සටහන් පත/Pregnancy Record</h1>

<form method="POST" action="Form1.php">
<input type="text" name="NIC" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($NIC);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>

<table >
        <tr>
            <td>
            රුධිර ඝනය/Blood Group:
                <select name="BloodGroup">
                    <option  selected hidden value=""></option>
                    <option value="O-" <?php if($BloodGroup=="O-") echo 'selected="selected"'; ?>>O-</option>
                    <option value="B-" <?php if($BloodGroup=="B-") echo 'selected="selected"'; ?>>B-</option>
                    <option value="A-" <?php if($BloodGroup=="A-") echo 'selected="selected"'; ?>>A-</option>
                    <option value="AB-" <?php if($BloodGroup=="AB-") echo 'selected="selected"'; ?>>AB-</option>
                    <option value="O+" <?php if($BloodGroup=="O+") echo 'selected="selected"'; ?>>O+</option>
                    <option value="B+" <?php if($BloodGroup=="B+") echo 'selected="selected"'; ?>>B+</option>
                    <option value="A+" <?php if($BloodGroup=="A+") echo 'selected="selected"'; ?>>A+</option>
                    <option value="AB+" <?php if($BloodGroup=="AB+") echo 'selected="selected"'; ?>>AB+</option>
                </select>
                
            </td>
            <td><br><br></td>
            <td>
            ශරීර ස්කන්ධ  දර්ශකය/BMI:
                <input type="text" name="BMI" maxlength="10" value="<?php echo($BMI);?>">
            </td>
            </tr>
            <tr>
            <td>
            උස(සෙ.මී.)/Height(cm):
                <input type="text" name="height" maxlength="10" value="<?php echo($height);?>">
            </td>
            <td><br><br></td>
            <td>
            ආසාත්මිකතා /Allergies:
                <input type="text" name="allergies" value="<?php echo($allergies);?>">
            </td>

            
 
        </tr>
    </table>
<br><br>
    <table>
        
        <tr>
            
            <td>
            මවගේ නම/Name of the mother:
                <input type="text" name="Name_of_the_mother" size="50" value="<?php echo($Name_of_the_mother);?>">
            </td>

            <td>
            රෝහල් සයනයේ නම/Name of the Hospital Clinic:
                <input type="text" name="Name_of_the_Hospital_Clinic" size="50" value="<?php echo($Name_of_the_Hospital_Clinic);?>">
            </td>
            
        </tr>
  
        <tr>
            <td>
            වයස/Age:
                <input type="text" name="age" size="10" value="<?php echo($age);?>">
            </td>
            <td>
            ප්‍රසව හා නරිවේධ විශේෂඥ වෛද්‍යවරයාගේ නම/<br>Name of the Consultant Obstetrician:
                <input type="text" name="Name_of_the_Consultant_Obstetrician" size="50" value="<?php echo($Name_of_the_Consultant_Obstetrician);?>">
            </td>
        </tr>
        
        <tr>
            <td>
                <label>පවුල් සෞඛ්‍ය සේවා නිලධාරී කොට්ඨාශය/Name of the field Clinic:</label>
                <input type="text" name="Name_of_the_field_Clinic" size=50 value="<?php echo($Name_of_the_field_Clinic);?>">
            </td>
            <td>
                <label>ග්‍රාම නිලධාරී කොට්ඨාශය/Grama Niladari Division:</label>
                <input type="text" name="GramaNiladariDivision" size=50 value="<?php echo($GramaNiladariDivision);?>">
            </td>
        </tr>
</table>
<br><br>
<table>
        <tr>
            <td>
                <label>ලියාපදිංචි අංකය සහ දිනය/Registration No. and Date<br>(යෝග්‍යත පවුල් ලේඛනය/Eligible Family Register):</label>

                <input type="text" name="RegistrationNoEligibleFamilyRegister" size=10 value="<?php echo($RegistrationNoEligibleFamilyRegister);?>">
                <input type="date" name="RegistrationDateEligibleFamilyRegister" value="<?php echo($RegistrationDateEligibleFamilyRegister);?>">
            </td>
            <td><br><br></td>
            <td><br><br></td>
            <td><br><br></td>
            <td><br><br></td>
            <td>
                <label>ලියාපදිංචි අංකය සහ දිනය/Registration No. and Date<br>(ගර්භනී මව්වරුන්ගේ ලේඛනය/Pregnant mother's Register):</label>
                <input type="text" name="RegistrationNoPregnantmothersRegister" size=10 value="<?php echo($RegistrationNoPregnantmothersRegister);?>">
                <input type="date" name="RegistrationDatePregnantmothersRegister" value="<?php echo($RegistrationDatePregnantmothersRegister);?>">
            </td>
        </tr>
    </table>
    <br><br>

    <label>හදුනාගත් පුර්ව ප්‍රසව අවදානම් තත්ව/ රෝගී තත්ව/<br>Identified antenatal risk conditions & modifiers:</label><br>
    <input type="text" name="IdentifiedAntenatalRiskConditionsModifiers" size=100 value="<?php echo($IdentifiedAntenatalRiskConditionsModifiers);?>">
<br><br>
    <table>
        <tr>
            <td>
                <label>ලේ ඥාතින් අතර විවාහය/Consanguinity:</label>
                <input type="text" name="consanguinity"  value="<?php echo($consanguinity);?>">

            </td>
        </tr>
    </table>
    <table>
        <tr>
        <td>රුබෙල්ලා ප්‍රතිශක්තිකරණය/Rubella Immunization:</td>
            <td>
                
                <input type="text" name="RubellaImmunization"  value="<?php echo($RubellaImmunization);?>">

            </td>
        </tr>
</table>

<table>
        <tr>
            <td>
                <label>පෙර ගර්භ සුව පිරික්සුම කලේද යන වග/Pre-pregnancy screening done:</label>
                <input type="text" name="PrePregnancyScreeningDone"  value="<?php echo($PrePregnancyScreeningDone);?>">
            </td>
        </tr>
</table>
<table>
        <tr>
            <td>
                <label>පෙර ගර්භ සුව පිරික්සුම කලේද යන වග/Pre conceptional Folic Acid:</label>
                <input type="text" name="PreconceptionalFolicAcid"  value="<?php echo($PreconceptionalFolicAcid);?>">
            </td>
        </tr>
</table>
<table>
        <tr>
            <td>
                <label>සැලසුම් කල ගර්භනීභාවයක්ද යන වග/Planed pregnancy or not:</label>
                <input type="text" name="Planed_pregnancy_or_not"  value="<?php echo($Planed_pregnancy_or_not);?>">
            </td>
        </tr>
</table>
<table>
        <tr>
            <td>
                <label>මඳසරුභාවය පිළිබද ඉතිහාසය/History of subfertility:</label>
                <input type="text" name="Historyofsubfertility" value="<?php echo($Historyofsubfertility);?>">

            </td>
        </tr>

        <tr>
            <td>
                <label>අවසාන වරට භාවිතා කල පවුල් සැලසුම් ක්‍රමය/Family planing method last used</label>
                <input type="text" name="Family_planing_method_last_used" value="<?php echo($Family_planing_method_last_used);?>">

            </td>
        </tr>
    </table>
    <br><br>
    

    <h2>වර්තමාන ගර්භ ඉතිහාසය/Present obstetric history</h2>
    <table>
        <tr>
            <td>
                <labeL>කීවෙනි ගර්භයද/Gravidity:</labeL>
                <label>G:</label>
                <input type="text" name="G" size=10 value="<?php echo($G);?>">
                <label>P:</label>
                <input type="text" name="P" size=10 value="<?php echo($P);?>">
                <label>C:</label>
                <input type="text" name="C" size=10 value="<?php echo($C);?>">
            </td>
        </tr>

        <tr>
            <td>
                <label>බාලම  ළමයාගේ වයස/Age of youngest Child</label>
                <input type="text" name="AgeOfYoungestChild" size=10 value="<?php echo($AgeOfYoungestChild);?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>අන්තිමට ක්‍රමවත්ව ඔසප් වූ දිනය/LRMP:</label>
                <input type="date" name="LRMP" value="<?php echo($LRMP);?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>බලාපොරොත්තු වූ ප්‍රසව දිනය/EDD:<br>(ති 40 සම්පුර්ණ වන දිනය/40 weeks completed)</label>
                <input type="date" name="EDD" value="<?php echo($EDD);?>">
            </td>
        </tr>

        <tr>
            <td>
                <label>US නිවරදී කල බලාපොරොත්තු ප්‍රසව දිනය /US corrected EDD<br>(To be filled by VOG/MO):</label>
                <input type="date" name="US_corrected_EDD" value="<?php echo($US_corrected_EDD);?>">
            </td>
        </tr>

        <tr>
            <td>
                <label>POA at dating Scan:</label>
                <input type="text" name="POA_at_dating_Scan" size=10 value="<?php echo($POA_at_dating_Scan);?>">
            </td>
        </tr>
        
        <tr>
            <td>
                <label>භ්‍රැණ චලන පළමුවෙන් දැණුනු දිනය/Date of Quickening:</label>
                <input type="text" name="Date_of_Quickening" size=10 value="<?php echo($Date_of_Quickening);?>">
            </td>
        </tr>

        <tr>
            <td>
                <label>ලියාපදිංචි කරන විට ගර්භයට සති ගණන/POA at Registration:</label>
                <input type="text" name="POA_at_Registration" size=10 value="<?php echo($POA_at_Registration);?>">
            </td>
        </tr>

    </table>
    <br><br>

    <div>
        <input type="submit" name="Insert" value="Save"> 
         
    </div>

</form>
</body>

</html>
