<?php
    include "inc/header1.php";
    include "inc/nav1.php";
    include "district/getdistrict.php";
?>

<div class="container">
        <div>
            <p>
                Note: <b><u>Characters like&nbsp; ~ $ &lt; &gt; ( ) %&nbsp; \ - + : ; { } [ ] ` ! #
                        ^ &amp; * + = | " ? should not be entered
                        in ANY of the FIELDS/COLUMNS <br> (*) indicates mandatory
            </p>
            <p>
                Click on <input type="radio"> or <input type="checkbox"> to select the option. Multiple <input type="checkbox"> can also be selected as applicable.
            </p>
            <p>
                (Please scroll down to see the errors, if any)
            </p>
        </div>
        <div>
            <h3>Application for the post of Village Accountant</h3>
            <form method="post" action="" name="VAappForm">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                District opted for appointment /
                                ನೇಮಕಾತಿ ಬಯಸುವ ಜಿಲ್ಲೆಯ ಹೆಸರು *
                            </td>
                            <td>
                                <div class="form-group">
                                    <select>
                                        <option value="541">ಕೊಡಗು/KODAGU</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                Full Name /ಆಭ್ಯರ್ಥಿಯ ಪೂರ್ಣ ಹೆಸರು(as in SSLC/10th Cert.) *
                            </td>
                            <td>
                                <input type="text" id="name" name="applicantName" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                Mother's Name /ತಾಯಿಯ ಹೆಸರು *	
                            </td>
                            <td>
                                <input type="text" id="motherName" name="motherName" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                Father's/Husband's Name /ತಂದೆಯ/ಗಂಡನ ಹೆಸರು *	
                            </td>
                            <td>
                                <input type="text" id="fatherName" name="fatherName" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                Gender /ಲಿಂಗ*	
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="applicantGender" id="flexRadioDefault1" value="M">
                                    <label class="form-check-label" for="applicantGender">
                                        Male/ಪುರುಷ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="applicantGender" id="flexRadioDefault2" value="F">
                                    <label class="form-check-label" for="applicantGender">
                                        Female/ಮಹಿಳೆ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="applicantGender" id="flexRadioDefault3" value="T">
                                    <label class="form-check-label" for="applicantGender">
                                        Others/ಇತರೆ
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                Date of Birth /ಜನ್ಮ ದಿನಾಂಕ*	   
                            </td>
                            <td>
                                <input type="date" name="birthDate" class="form-control">
                            </td>    
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                Applied category /ಕೋರಿರುವ ವರ್ಗ*
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="GM">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        GM/ಸಾ.ಅ	
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="SC">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        SC/ಪ.ಜಾ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="ST">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        ST/ಪ.ಪಂ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="CAT">
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        Cat-1/ಪ್ರವಗ೯-1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" value="2A">
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        2A/2ಎ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" value="2B">
                                    <label class="form-check-label" for="flexRadioDefault6">
                                        2B/2ಬಿ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7" value="3A">
                                    <label class="form-check-label" for="flexRadioDefault7">
                                        3A/3ಎ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8" value="3B">
                                    <label class="form-check-label" for="flexRadioDefault8">
                                        3B/3ಬಿ
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                Do you come under these groups ?/ ನೀವು ಈ ಗುಂಪುಗಳಲ್ಲಿ ಬರುವಿರಾ?	 
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                    <label class="form-check-label" for="flexCheckDefault1">
                                        Rural/ಗ್ರಾಮೀಣ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        KMS/ಕನ್ನಡ ಮಾಧ್ಯಮ ಅಭ್ಯಥಿ೯  
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                    <label class="form-check-label" for="flexCheckDefault3">
                                        PDP/ಯೋಜನಾ ನಿರಾಶ್ರಿತ ಅಭ್ಯಥಿ೯ 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                    <label class="form-check-label" for="flexCheckDefault4">
                                        Ex-Serviceman/ಮಾಜಿ ಸೈನಿಕ  
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Y" id="PHC" onclick="Enableddl(this)">
                                    <label class="form-check-label" for="PHC">
                                        PHC/ಅಂಗವಿಕಲ
                                    </label>
                                </div>                           
                            </td>
                        </tr>
                        <tr id="trphcddl">
                            <td>8A</td>
                            <td>
                                Description of PHC/ಅಂಗವಿಕಲತೆಯ ವಿವರ 
                            </td>
                            <td>
                                <div class="dropdown">
                                    <select id="phcddl" required>
                                        <option value="" selected>--Select Disability--</option>
                                        <option value="LEPROSY CURED/ಕುಷ್ಠ ರೋಗದಿಂದ ಗುಣಮುಖರಾದವರು">LEPROSY CURED/ಕುಷ್ಠ ರೋಗದಿಂದ ಗುಣಮುಖರಾದವರು</option>
                                        <option value="HEARING IMPAIRED/ಶ್ರವಣದೋಷ  ಉಳ್ಳವರು">HEARING IMPAIRED/ಶ್ರವಣದೋಷ  ಉಳ್ಳವರು</option>
                                        <option value="MENTALLY ILL/ಶ್ರವಣದೋಷ  ಉಳ್ಳವರು">MENTALLY ILL/ಶ್ರವಣದೋಷ  ಉಳ್ಳವರು</option>
                                        <option value="LOCOMOTOR DISABILITY/ಚಲನವಲನ ವೈಕಲ್ಯ">LOCOMOTOR DISABILITY/ಚಲನವಲನ ವೈಕಲ್ಯ</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                                Are you in Govt.Service ? / ಸಕಾ೯ರಿ ಸೇವೆಯಲ್ಲಿರುವಿರಾ?*
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Y/N">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes/ಹೌದು 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Y1/N1">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        No/ಇಲ್ಲ
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>
                                Do you claim age relaxation ? If yes, select accordingly./ <br> ನೀವು ವಯೋಮಿತಿ ರಿಯಾಯಿತಿ ಕೋರುವಿರಾ?ಹಾಗಿದಲ್ಲಿ ಸೂಕ್ತ ಚೌಕವನ್ನು ಆಯ್ಕೆ ಮಾಡಿ.
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                    <label class="form-check-label" for="flexCheckDefault1">
                                        Widow/ವಿಧವೆ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        PHC/ಅಂಗವಿಕಲ 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                    <label class="form-check-label" for="flexCheckDefault3">
                                        Ex-Serviceman/ಮಾಜಿ ಸೈನಿಕ 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                    <label class="form-check-label" for="flexCheckDefault4">
                                        Bonded Labour/ಜೀತ ವಿಮುಕ್ತರು  
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                    <label class="form-check-label" for="flexCheckDefault5">
                                        Govt./Local Authority/ಸರ್ಕಾರಿ / ಸ್ಥಳೀಯ ಪ್ರಾಧಿಕಾರ ಸೇವೆ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                    <label class="form-check-label" for="flexCheckDefault6">
                                        Census/ಜನಗಣತಿ
                                    </label>
                                </div>  
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                    <label class="form-check-label" for="flexCheckDefault7">
                                        Village Group Instructor/ಗ್ರಾಮ ಸಮೂಹ ಪರಿಶೀಲಕ
                                    </label>
                                </div>  
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                                    <label class="form-check-label" for="flexCheckDefault8">
                                        NCC Instructor/ಎನ್ ಸಿ ಸಿ ಪರಿಶೀಲಕ
                                    </label>
                                </div>     
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>
                                Qualifying exam passed ?/
                                ನೀವು ಅಹ೯ತಾ ಪರೀಕ್ಷೆಯಲ್ಲಿ ಉತ್ತೀಣ೯ರಾಗಿದ್ದೀರಾ? *
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="PUC">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        PUC 2nd /ಪಿ ಯು ಸಿ 2nd	
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="CBSC">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        CBSE 12th/ ಸಿ ಬಿ ಎಸ್ ಇ 12th
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="ICSE">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        ICSE 12th/ಐ ಸಿ ಎಸ್ ಇ 12th 
                                    </label>
                                </div>   
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>
                                Total marks obtained' in 2nd PUC/CBSE 12th/ICSE 12th/ <br> 2nd ಪಿ ಯು ಸಿ /ಸಿ ಬಿ ಎಸ್ ಇ 12th/ಐ ಸಿ ಎಸ್ ಇ 12th ರಲ್ಲಿ  ಗಳಿಸಿದ ಒಟ್ಟು ಅಂಕಗಳು *
                            </td>
                            <td>
                                <input type="text" id="marks"  class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>
                                Total maximum marks' in 2nd PUC/CBSE 12th/ICSE 12th/ <br> 2nd ಪಿ ಯು ಸಿ /ಸಿ ಬಿ ಎಸ್ ಇ 12th/ಐ ಸಿ ಎಸ್ ಇ 12th ರಲ್ಲಿ    ಒಟ್ಟು ಗರಿಷ್ಟ ಅಂಕಗಳು *
                            </td>
                            <td>
                                <input type="text" id="maxMarks" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>
                                Address for communication/ಪೂಣ೯ ವಿಳಾಸ * 
                            </td>
                            <td>
                                <input type="text" id="address1" class="form-control">
                                <input type="text" id="address2" class="form-control">
                                <div class="dropdown">
                                
                                    <select>
                                        <option>Select District</option>
                                        <?php 
                                            $newObj = new District();
                                            $dists = $newObj->getDistricts();
                                            foreach($dists as $key => $dist) :
                                        ?>
                                        <option value="<?php echo $dist['district_code']?>">
                                        <?php echo $dist['district_name_eng'] ?> / <?php echo $dist['district_name_kan'] ?>
                                        </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <label for="pin">PINCODE/ಪಿನ್‌ಕೋಡ್</label>
                                <input type ="number" class="form-control" id="pin">
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>
                                Photo *(.jpg,.GIF) 
                            </td>
                            <td>
                                <div>
                                    <label for="formFile" class="form-label"></label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>
                                Email address(if any) /
                                ಇ-ಮೇಲ್ ವಿಳಾಸ (ಇದ್ದಲ್ಲಿ) 
                            </td>
                            <td>
                                <input class="form-control" id="email"> 
                            </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>
                                Phone (if any)/
                                ಪೋನ್ ನ೦ (ಇದ್ದಲ್ಲಿ) 
                            </td>
                            <td>
                                <input class="form-control" id="phone"> 
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>
                                Mobile No (if any)/
                                ಮೊಬೈಲ್ ನ೦(ಇದ್ದಲ್ಲಿ) 
                            </td>
                            <td>
                                <input class="form-control" id="mobile"> 
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">PREVIEW</button>
                <button type="reset" class="btn btn-danger">CANCEL</button>                
            </form>
        </div>
    </div>

<?php
    include "inc/footer.php";
    include "inc/script1.php";
?>