<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Application Form For Clinical Establishment</title>
        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<style>
.form-section{
    display: none;
}

.form-section.current{
    display: inline;
}
.parsley-errors-list{
    color:red;
}



.checkbox-grid {
    display: flex;
    flex-wrap: wrap;
    list-style-type: none;
      margin-left: 50px;
  }
  
  .checkbox-grid li {
    flex:0 0 50%;
  }

  .checkbox-grid label{
    margin: 0px 10px 0px 10px;
    
  }
    
    .checkbox-grid1 {
    display: flex;
    flex-wrap: wrap;
    list-style-type: none;
      margin-left: 50px;
  }
  
  .checkbox-grid1 li {
    flex:0 0 50%;
  
  
  }
  .checkbox-grid1 label{
    margin: 0px 10px 0px 10px;

</style>





</head>
  <body>

    <div class="container-fluid  ">
      <div class="row justify-content-md-center">
        <div class="col-md-9 ">
            <div class="card px-5 py-3 mt-5 shadow">
               <h1 class="text-danger text-center mt-3 mb-4">Application Form For Clinical Establishment</h1>

               <div class="nav nav-fill my-3">
                          <label class="nav-link shadow-sm step0    border ml-2 ">Establishment Details</label>
                          <label class="nav-link shadow-sm step1   border ml-2 " >Ownership Details</label>
                          <label class="nav-link shadow-sm step2   border ml-2 " >Type Of Establishment</label>
                          <label class="nav-link shadow-sm step3   border ml-2 " >Type Of Services</label>
                        </div>
                <form action="{{url('/registerapp')}}" method="post" class="employee-form">
                       @csrf
                     <div class="form-section">
                         <h5>Establishment Details</h5><br>
                         <label for="">Name:</label>
                         <input type="text" class="form-control mb-3" name="name" required>
                         <label for="">Mobile No:</label>
                         <input type="tel" class="form-control mb-3" name="mob" required>
                         <label for="">Landline No:</label>
                         <input type="tel" class="form-control mb-3" name="phone"  required>
                         <label for="">E-mail:</label>
                         <input type="email" class="form-control mb-3" name="email" required>
                         <label for="">Date/Month and Year Of Starting:</label>
                         <input type="date" class="form-control mb-3" name="sdate" required>
                         <label for="">Address:Village/Town Name </label>
                         <input type="text" class="form-control mb-3" name="add1" required>
                         
                         
                         <label for="">State</label>
                         <select name="state1" class="form-control wide" id="country" required>
                         <option value="">Select Option</option>
                         <option value="A">Ladakh</option>
                        </select>
  
                         <label for="">District</label>
                         <select name="district1" class="form-control wide" id="state" required>
                         <option value="">Select Option</option>
                         <option value="1">Leh</option>
                         <option value="2">Kargil</option>
                          </select>
     
                          <label for="">Block</label>
                         <select name="block1" class="form-control wide" id="city" required>
                         <option value="">Select Option</option>
                         <option value="2">Leh</option>
                         <option value="3">Kargil</option>
                         </select>
     
                          <label for="">Postal Code:</label>
                         <input type="text" class="form-control mb-3" name="postal1" required>
                         <label for="">System Of Medicine Offered:</label>
                         <ul class="checkbox-grid">
                             <li><input type="checkbox" name="checkbox1[]" value="Allopathy" /><label for="text1">Allopathy</label></li>
                             <li><input type="checkbox" name="checkbox1[]" value="Ayurveda" /><label for="text2">Ayurveda</label></li>
                             <li><input type="checkbox" name="checkbox1[]" value="Unani" /><label for="text3">Unani</label></li>
                             <li><input type="checkbox" name="checkbox1[]" value="Siddha" /><label for="text4">Siddha</label></li>
                             <li><input type="checkbox" name="checkbox1[]" value="Homeopathy" /><label for="text5">Homeopathy</label></li>
                             <li><input type="checkbox" name="checkbox1[]" value="Yoga" /><label for="text6">Yoga</label></li>
                             <li><input type="checkbox" name="checkbox1[]" value="Naturopathy" /><label for="text7">Naturopathy</label></li>
                             <li><input type="checkbox" name="checkbox1[]" value="Sowa Rigpa" /><label for="text8">Sowa Rigpa</label></li>
                           </ul>
                         
              
                </div>
               
               <div class="form-section">
                 <h5>Ownership Details</h5><br>
                         <label for="inputDepartmentName">Government/Public Sector</label>
                     <select name="type11" class="form-control wide" id="inputDepartmentName">
                      <option value="">Select Option</option>
                       <option value="Central Govt.">Central Govt.</option>
                       <option value="State Govt.">State Govt.</option>
                       <option value="Local-Govt(Municipal Zila Parishad)">Local-Govt(Municipal Zila Parishad)</option>
                       <option value="Other Ministries and Depts(railway,Police etc)">Other Ministries and Depts(railway,Police etc)</option>
                       <option value="Employee state Insurance Corporation">Employee state Insurance Corporation</option>
                       <option value="Autonomous organization under Govt.">Autonomous organization under Govt.</option>
                     </select>
                     <label for="inputDepartmentName">Non Government/Private Sector</label>
                     <select name="type2" class="form-control wide" id="inputDepartmentName">
                         <option value="">Select Option</option>
                       <option value="Individual Proprietorship">Individual Proprietorship</option>
                       <option value="Partnership">Partnership</option>
                      <option value="Registered Companies(Registered Under Central/Provincial/State Act)">Registered Companies(Registered Under Central/Provincial/State Act)</option>
                      <option value="Society/trust(Registered Under Central/Provincial/State Act)">Society/trust(Registered Under Central/Provincial/State Act)</option>
                     </select>
                         <label for="oname">Name Of The Owner Of Establishment</label>
                         <input type="text" class="form-control mb-3" name="oname" required>
                         <label for="">Mobile No:</label>
                         <input type="tel" class="form-control mb-3" name="omob" required>
                         <label for="">Landline No:</label>
                         <input type="tel" class="form-control mb-3" name="ophone"  required>
                         <label for="">E-mail:</label>
                         <input type="email" class="form-control mb-3" name="oemail" required>
                          <label for="">Address:Village/Town Name </label>
                         <input type="text" class="form-control mb-3" name="add2" required>
                         <label for="">State</label>
                         <select name="state2" class="form-control wide" id="inputDoctorName" required>
                         <option value="">Select Option</option>
                           <option value="Normal distribution ">Ladakh</option>
                           <option value="Normal distribution ">Normal distribution </option>
                           <option value="Normal distribution ">Normal distribution </option>
                         </select>
     
                         <label for="district2">District</label>
                         <select name="district2" class="form-control wide" id="inputDoctorName" required>
                         <option value="">Select Option</option>
                           <option value="Normal distribution ">Leh</option>
                           <option value="Normal distribution ">Kargil</option>
                          </select>
                          <label for="block2">Block</label>
                         <select name="block2" class="form-control wide" id="inputDoctorName" required>
                         <option value="">Select Option</option>
                           <option value="Normal distribution ">Leh</option>
                           <option value="Normal distribution ">Kargil</option>
                          </select>
                          <label for="postal2">Postal Code:</label>
                         <input type="text" class="form-control mb-3" name="postal2" required>
                  
                </div>
                <div class="form-section">
                    <h5>Type Of Establishment</h5><br>
                         <label for="checkbox">(I)1. Clinical Outpatient</label><br>
                    
                    <ul class="checkbox-grid1">
                     <input type="checkbox" id="vehicle1" name="checkbox2[]" value="Single Practioner">
                     <label for="vehicle1"> Single Practioner</label><br>
                     <input type="checkbox" id="vehicle2" name="checkbox2[]" value="Consultation Services Only">
                     <label for="vehicle2"> Consultation Services Only</label><br>
                     <input type="checkbox" id="vehicle3" name="checkbox2[]" value="With Diagnostic Services">
                     <label for="vehicle3"> With Diagnostic Services</label><br>
                      <input type="checkbox" id="vehicle3" name="checkbox2[]" value="With Short Stay Facility">
                     <label for="vehicle3">With Short Stay Facility</label><br><br>
                   </ul>
                   <label for="checkbox">2. Polyclinic</label><br>
                     <ul class="checkbox-grid1">
                      <input type="checkbox" id="vehicle2" name="checkbox3[]" value="Consultation Services Only">
                     <label for="vehicle2"> Consultation Services Only</label><br>
                     <input type="checkbox" id="vehicle3" name="checkbox3[]" value="With Diagnostic Services">
                     <label for="vehicle3"> With Diagnostic Services</label><br>
                      <input type="checkbox" id="vehicle3" name="checkbox3[]" value="With Short Stay Facility">
                     <label for="vehicle3">With Short Stay Facility</label><br><br>
                     </ul>
                     <input type="checkbox" id="vehicle3" name="checkbox4[]" value="Disprnsery">
                         <label for="vehicle3"> 3. Disprnsery</label><br>
                    
                    
                 <input type="checkbox" id="vehicle3" name="checkbox5[]" value="Health Checkup Center"
                    <label for="vehicle3"> 4. Health Checkup Center</label> 
                    </ul>
                    <ul class="checkbox-grid1">
                    <label for="checkbox">(II)1. Day Care Facility</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox6[]" value="Medical">
                     <label for="vehicle1">Medical</label><br>
                     <input type="checkbox" id="vehicle2" name="checkbox6[]" value="Surgical">
                     <label for="vehicle2"> Surgical</label><br>
                     <input type="checkbox" id="vehicle3" name="checkbox6[]" value="Medical Spa">
                     <label for="vehicle3">Medical Spa</label><br>
                      <input type="checkbox" id="vehicle3" name="checkbox6[]" value="Wellness Center">
                     <label for="vehicle3">Wellness Center</label> 
                     (Where Qualified Medical Proffessionlas are Available to supervise the serviece)<br><br>
                   </ul>
                   <label for="checkbox">(III)1. Hospitals Including Nursing Home</label><br>
                    
                  <ul class="checkbox-grid1">
                      <input type="checkbox" id="vehicle1" name="checkbox7[]" value="Hospital Level 1A">
                     <label for="vehicle1">Hospital Level 1A</label><br>
                     <input type="checkbox" id="vehicle2" name="checkbox7[]" value="Hospital Level 1B<">
                      <label for="vehicle2"> Hospital Level 1B</label><br>
                       <input type="checkbox" id="vehicle3" name="checkbox7[]" value="Hospital Level 2">
                       <label for="vehicle3">Hospital Level 2</label><br>
                       <input type="checkbox" id="vehicle3" name="checkbox7[]" value="Hospital Level 3">
                      <label for="vehicle3">Hospital Level 3</label> <br>
                      <input type="checkbox" id="vehicle3" name="checkbox7[]" value="Hospital Level 3(Non-Teaching)">
                     <label for="vehicle3">Hospital Level 3(Non-Teaching)</label> <br>
                      <input type="checkbox" id="vehicle3" name="checkbox7[]" value="Hospital Level 4(Teaching">
                     <label for="vehicle3">Hospital Level 4(Teaching)</label> <br><br>
                     </ul>
     
                     <label for="checkbox">(IV)1. Dental Clinics</label><br>
                    
                    <ul class="checkbox-grid1">
                     <input type="checkbox" id="vehicle1" name="checkbox8[]" value="Single Practioner">
                     <label for="Single Practioner"> Single Practioner</label><br>
                     <input type="checkbox" id="vehicle2" name="checkbox8[]" value="Poly Clinic Dentaly">
                     <label for="Poly Clinic Denta">Poly Clinic Dental</label><br>
                
                   </ul>
                   <label for="checkbox">2. Dental Hospitals(Specialists as Listed in IDC Act)</label><br>
                   <ul class="checkbox-grid1">
                     <input type="checkbox" id="vehicle2" name="checkbox9[]" value="Oral and Maxillofacial Surgery">
                     <label for="Oral and Maxillofacial Surgery"> Oral and Maxillofacial Surgery</label><br>
                      <input type="checkbox" id="vehicle2" name="checkbox9[]" value="Oral Medicine and Radiology">
                      <label for="Oral Medicine and Radiology"> Oral Medicine and Radiology</label><br>
                       <input type="checkbox" id="vehicle2" name="checkbox9"[] value="Orthodontics">
                      <label for="Orthodontics"> Orthodontics</label><br>
                     <input type="checkbox" id="vehicle2" name="checkbox9[]" value="Conservative Dentistry Endodontics">
                     <label for="Conservative Dentistry Endodontics"> Conservative Dentistry Endodontics</label><br>
                   <input type="checkbox" id="vehicle2" name="checkbox9[]" value="Periodontics">
                     <label for="Periodontics"> Periodontics</label><br>
                   <input type="checkbox" id="vehicle2" name="checkbox9[]" value="Periodontics and Preventive Dentistry">
                  <label for="Periodontics and Preventive Dentistry"> Periodontics and Preventive Dentistry</label><br>
                   <input type="checkbox" id="vehicle2" name="checkbox9[]" value="Oral Pathology and Microbiology">
                  <label for="Oral Pathology and Microbiology"> Oral Pathology and Microbiology</label><br>
                  <input type="checkbox" id="vehicle3" name="checkbox9[]" value="Prosthodontics and crown bridg">
                  <label for="vehicle3"> Prosthodontics and crown bridge</label><br>
                   <input type="checkbox" id="vehicle3" name="checkbox9[]" value="Public Health Dentistry">
                  <label for="vehicle3">Public Health Dentistry</label><br><br>
                 </ul>
                 <label for="checkbox">(V)1. Diagnostics Center  -   Medical Diagnostic Laboratories</label><br>
                    
                    <ul class="checkbox-grid1">
                     <input type="checkbox" id="vehicle1" name="checkbox10[]" value="Pathology">
                     <label for="vehicle1"> Pathology</label><br>
                     <input type="checkbox" id="vehicle2" name="checkbox10[]" value="Biochemistry">
                     <label for="vehicle2">Biochemistry</label> <br>
                     <input type="checkbox" id="vehicle1" name="checkbox10[]" value="Microbiology">
                     <label for="vehicle1"> Microbiology</label><br>
                      <input type="checkbox" id="vehicle1" name="checkbox10[]" value="Molecular Biology ang Genetics Labs">
                     <label for="vehicle1"> Molecular Biology ang Genetics Labs</label><br>
                      <input type="checkbox" id="vehicle1" name="checkbox10[]" value="Virologyr">
                     <label for="vehicle1"> Virology</label><br><br>
                  
                   </ul>
                   <label for="checkbox">2. Diagnostics Imaging Center  - Radiology </label><br>
                     <ul class="checkbox-grid1">
                     <input type="checkbox" id="vehicle2" name="checkbox11[]" value="General Radiology">
                     <label for="vehicle2"> General Radiology</label><br>
                     <input type="checkbox" id="vehicle2" name="checkbox11[]" value="Interventional Radiology">
                     <label for="vehicle2"> Interventional Radiology</label><br>
                     <input type="checkbox" id="vehicle2" name="checkbox11[]" value="Elecrromegnetic Imaging">
                     <label for="vehicle2"> Elecrromegnetic Imaging</label><br>
                     <input type="checkbox" id="vehicle2" name="checkbox11[]" value="Magnetic Resonance Imaging">
                     <label for="vehicle2"> Magnetic Resonance Imaging</label><br>
                     <input type="checkbox" id="vehicle2" name="checkbox11[]" value="Positron Emission Tomography (PET)Scan">
                     <label for="vehicle2"> Positron Emission Tomography (PET)Scan</label><br>
                 </ul>
                 <label for="checkbox">3. Ultrasound</label><br>
                     <ul class="checkbox-grid1">
                      <input type="checkbox" id="vehicle2" name="checkbox12[]" value="Ultrasound">
                         <label for="vehicle2"> Ultrasound</label><br>
                         </ul>
                  <label for="checkbox">4. Miscellaneous</label><br>
                    
                      <ul class="checkbox-grid1">
                       <input type="checkbox" id="vehicle1" name="checkbox13[]" value="Electrocardiography (ECG)">
                      <label for="vehicle1"> Electrocardiography (ECG)</label><br>
                      <input type="checkbox" id="vehicle2" name="checkbox13[]" value="Echocardiography">
                      <label for="vehicle2">Echocardiography</label> <br>
                      <input type="checkbox" id="vehicle1" name="checkbox13[]" value="Tread Mill Test">
                      <label for="vehicle1">Tread Mill Test</label><br>
                       <input type="checkbox" id="vehicle1" name="checkbox13[]" value="Electro Myography (EMG)">
                      <label for="vehicle1"> Electro Myography (EMG)</label><br>
                      <input type="checkbox" id="vehicle1" name="checkbox13[]" value="Electro Encephalo Graphy (EEG)">
                      <label for="vehicle1"> Electro Encephalo Graphy (EEG)</label><br>
                      <input type="checkbox" id="vehicle1" name="checkbox13[]" value="Electrophysiological Studies">
                       <label for="vehicle1"> Electrophysiological Studies</label><br>
                        <input type="checkbox" id="vehicle1" name="checkbox13[]" value="Mammography">
                       <label for="vehicle1"> Mammography</label><br><br>
                       </ul>
                       <label for="checkbox">(VI)1. Collection Center  (For all clinical Labs and Diagnostic center shall function under registered clinical establishment)</label><br>
                    
                    <ul class="checkbox-grid1">
                     <input type="checkbox" id="vehicle1" name="checkbox14[]" value="Yes">
                     <label for="vehicle1"> Yes</label><br>
                     <input type="checkbox" id="vehicle2" name="checkbox14[]" value="No">
                     <label for="vehicle2">No</label> <br>
                   </ul>
                   <label for="inputPhone">If Yes  Then No. of Collection Centers</label>
                     <input type="number" name="collec_no" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX">
                     <br>
                     <label for="checkbox">(VII) Allied HEalth Professions</label><br>
                     <ul class="checkbox-grid1">
                     <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Audiology">
                     <label for="vehicle1"> Audiology</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Behavioural Health">
                     <label for="vehicle1"> Behavioural Health</label> (Councelling,Marriage anf Family Therapy)<br>
                     <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Exercise Physiology">
                      <label for="vehicle1"> Exercise Physiology</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Nuclear Medicine Technology">
                      <label for="vehicle1"> Nuclear Medicine Technology</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Medical Laboratory Scientist">
                       <label for="vehicle1"> Medical Laboratory Scientist</label><br>
                      <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Dietetics">
                      <label for="vehicle1"> Dietetics</label><br>
                      <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Occupational Therapy">
                     <label for="vehicle1"> Occupational Therapy</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Optomertry">
                       <label for="vehicle1"> Optomertry</label><br> 
                     <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Orthoptics">
                      <label for="vehicle1"> Orthoptics</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox15[]" value=" Orthoptics and Prosthetics">
                      <label for="vehicle1"> Orthoptics and Prosthetics</label><br>
                      <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Osteopathy">
                       <label for="vehicle1"> Osteopathy</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Paramedic">
                      <label for="vehicle1"> Paramedic</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Podiatry">
                      <label for="vehicle1"> Podiatry</label><br>
                      <input type="checkbox" id="vehicle1" name="checkbox15" value="Health Psycology/Clinical Psycology">
                     <label for="vehicle1"> Health Psycology/Clinical Psycology</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox15" value="Physiotherapy">
                      <label for="vehicle1"> Physiotherapy</label><br>
     
                       <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Radiation Therapy">
                      <label for="vehicle1"> Radiation Therapy</label><br>
        
                      <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Radiography/Medical Imagingr">
                      <label for="vehicle1"> Radiography/Medical Imaging</label><br>
                       <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Respiratory Therapy">
                      <label for="vehicle1"> Respiratory Therapy</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Sonography">
                       <label for="vehicle1"> Sonography</label><br>
                         <input type="checkbox" id="vehicle1" name="checkbox15[]" value="Speach Pathology">
                       <label for="vehicle1"> Speach Pathology </label><br>
                     </ul>
                     <label for="checkbox">(VIII) AYUSH-- 1. Ayurveda</label><br>
                    
                    <ul class="checkbox-grid1">
                     <input type="checkbox" id="vehicle1" name="checkbox16[]" value="Aushadh Chikitsa">
                     <label for="vehicle1"> Aushadh Chikitsa</label><br>
                    <input type="checkbox" id="vehicle1" name="checkbox16[]" value="Shalya Chikitsa">
                     <label for="vehicle1"> Shalya Chikitsa</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox16[]" value="Shodhan Chikitsa">
                     <label for="vehicle1">Shodhan Chikitsa</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox16[]" value="Rasayana">
                     <label for="vehicle1"> Rasayana</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox16[]" value="Pathya">
                     <label for="vehicle1"> Pathya</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox16[]" value="Vyavastha">
                     <label for="vehicle1"> Vyavastha</label><br>
                   
                   </ul>
                     <label for="checkbox">2. Yoga </label><br>
                      <ul class="checkbox-grid1">
                   <input type="checkbox" id="vehicle1" name="checkbox17[]" value="Ashtang">
                     <label for="vehicle1">Ashtang</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox17[]" value="Yoga">
                     <label for="vehicle1"> Yoga</label><br> 
                   </ul>
                  
                   <label for="checkbox">3. Unani</label><br>
                    <ul class="checkbox-grid1">
                      <input type="checkbox" id="vehicle1" name="checkbox18[]" value="Matab Jarahat">
                     <label for="vehicle1"> Matab Jarahat</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox18[]" value="Llaj-bit-Tadbeer">
                     <label for="vehicle1"> Llaj-bit-Tadbeer</label><br>
                   
                      <input type="checkbox" id="vehicle1" name="checkbox18[]" value="Hifzan-e-Sehat">
                     <label for="vehicle1"> Hifzan-e-Sehat</label><br>
                      </ul>			 
                    <label for="checkbox">4. Siddha</label><br>
                                  
                    <ul class="checkbox-grid1">
                     <input type="checkbox" id="vehicle1" name="checkbox19[]" value="Maruthuvam">
                     <label for="vehicle1">Maruthuvam</label><br>
                    
                   <input type="checkbox" id="vehicle1" name="checkbox19[]" value="Sirappu Maruthuvam">
                     <label for="vehicle1"> Sirappu Maruthuvam</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox19[]" value="Varmam Thokkam And Yoga809">
                     <label for="vehicle1"> Varmam Thokkam And Yoga</label><br>
                   
                   </ul>
                   <label for="checkbox">5. Homeopathy</label><br>
                    <ul class="checkbox-grid1">
                    <input type="checkbox" id="checkbox20" name="checkbox20[]" value="Single Practioner">
                     <label for="vehicle1"> General Homeopathy</label><br>
                    </ul>
                   <label for="checkbox">6. Naturopathy</label><br>
                     <ul class="checkbox-grid1">
                      <input type="checkbox" id="checkbox21" name="checkbox21[]" value="Single Practioner">
                     <label for="vehicle1">Externam Therapies</label> with  Natural modalities<br>
                    <input type="checkbox" id="checkbox21" name="checkbox21[]" value="Single Practioner">
                     <label for="vehicle1">Internal Therapy</label><br>
                       </ul>		</div>
                <div class="form-section">
                   
                     <h5>Type Of Services</h5>
                               <br>
     
                         <input type="checkbox" id="checkbox22" name="checkbox22[]" value="General Practices Services">
                     <label for="vehicle1">1. General Practices Services</label><br>
                      <input type="checkbox" id="vehicle1" name="checkbox22[]" value=">Single Practices Services">
                     <label for="vehicle1">2. Single Practices Services</label><br> 
                     <input type="checkbox" id="vehicle1" name="checkbox22[]" value="Multi-Specialty Services(including Palliative care center,Trauma mCenter,Maternity Home applicable for Hospitals Only)">
                     <label for="vehicle1">3. Multi-Specialty Services(including Palliative care center,Trauma mCenter,Maternity Home applicable for Hospitals Only)</label><br>
                        <input type="checkbox" id="vehicle1" name="checkbox22[]" value=" Super Specialty Services">
                     <label for="vehicle1">4. Super Specialty Services</label><br><br>
                     Specialty Specific Medical Specialities--For which candidates must possess a recognized PG Degree(MD/Diploma/DNB or its equivalent degree)
                     <label for="checkbox"></label><br>
                                  
                    <ul class="checkbox-grid1">
                     <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Anaesthesiology">
                     <label for="vehicle1"> Anaesthesiology</label><br>
                    <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Aviation Medicine">
                     <label for="vehicle1"> Aviation Medicine</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Community Medicine<">
                     <label for="vehicle1">Community Medicine</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Dermatology,Venerology and Leprosy">
                     <label for="vehicle1"> Dermatology,Venerology and Leprosy</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Family Medicine">
                     <label for="vehicle1">Family Medicine</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox23[]" value="General Medicine">
                     <label for="vehicle1">General Medicine</label><br>
                    <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Immunohematology and Blood Transfusion">
                     <label for="vehicle1">Immunohematology and Blood Transfusion</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Nuclear Mediciner">
                     <label for="vehicle1">Nuclear Medicine</label><br> 
                    <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Paediatrics">
                     <label for="vehicle1">Paediatrics</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Physical Medicine Rehabilitation">
                     <label for="vehicle1">Physical Medicine Rehabilitation</label><br>
                    <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Psychiatry">
                     <label for="vehicle1"> Psychiatry</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Radio-Diagnosis">
                     <label for="vehicle1"> Radio-Diagnosis</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Radio-Therapy">
                     <label for="vehicle1">Radio-Therapy</label><br>
                  
                    <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Rheumatology">
                     <label for=" Rheumatology<">Rheumatology</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Sports Medicine">
                     <label for="Sports Medicine">Sports Medicine</label><br>
                   
                      <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Tropical Medicine">
                     <label for="Radiation Therapy">Tropical Medicine</label><br>
                      
                     <input type="checkbox" id="vehicle1" name="checkbox23[]" value="Tuberculosis & Respiratory Medicine or Pulmonary Medicine">
                     <label for="Radiography/Medical Imaging">Tuberculosis & Respiratory Medicine or Pulmonary Medicine</label><br>
                   <br>
                   </ul> 
                     
                     Surgical Specialities--For which candidates must possess a recognized PG Degree (MS/Diploma/DNB or its equivalent degree)Otorhinolary General Surgery
                    <label for="checkbox"></label><br>
                                  
                    <ul class="checkbox-grid1">
                     <input type="checkbox" id="vehicle1" name="checkbox24[]" value="Ophthalmology">
                     <label for="vehicle1"> Ophthalmology</label><br>
                    <input type="checkbox" id="vehicle1" name="checkbox24[]" value="Orthopaedics">
                     <label for="vehicle1"> Orthopaedics</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox24[]" value="Obsterics and Gynaecology">
                     <label for="vehicle1">Obsterics and Gynaecology</label><br>
                   </ul>
                  
                   <label for="checkbox">Surgical Super-Specialities </label><br>
                   <ul class="checkbox-grid1">
                   
                     <input type="checkbox" id="vehicle1" name="checkbox25[]" value="Cardiovascular Thoracic Surgery">
                     <label for="vehicle1">Cardiovascular Thoracic Surgery</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox25[]" value="Urology">
                     <label for="vehicle1">Urology</label><br> 
                    <input type="checkbox" id="vehicle1" name="checkbox25[]" value="Neuro-Surgery">
                     <label for="vehicle1">Neuro-Surgery</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox25[]" value="Paediatrics Surgery">
                     <label for="vehicle1">Paediatrics Surgery</label><br>
                    <input type="checkbox" id="vehicle1" name="checkbox25[]" value="Plastic & Reconstructive Surgery">
                     <label for="vehicle1"> Plastic & Reconstructive Surgery</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox25[]" value="Surgical Oncology">
                     <label for="vehicle1">Surgical Oncology</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox25[]" value="Endocrine Surgery">
                     <label for="vehicle1">Endocrine Surgery</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox25[]" value="Gynaecological Oncology">
                     <label for="vehicle1">Gynaecological Oncology</label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox25[]" value="Vascular Surgery">
                     <label for="vehicle1">Vascular Surgery</label><br>
                   
                   </ul>
                   
                  <label for="checkbox">Medical Super Specialities</label><br>
                     <ul class="checkbox-grid1">
                    <input type="checkbox" id="vehicle1" name="checkbox26[]" value="Cardiology">
                     <label for=" Health Psycology/Clinical Psycology<">Cardiology</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox26[]" value="Clinical Haematology Including stem Cell Therapy">
                     <label for="Physiotherapy"> Clinical Haematology Including stem Cell Therapy</label><br>
                   
                      <input type="checkbox" id="vehicle1" name="checkbox26[]" value="Clinical Pharmacology">
                     <label for="Radiation Therapy"> Clinical Pharmacology</label><br>
                      
                     <input type="checkbox" id="vehicle1" name="checkbox26[]" value="Endocrinology">
                     <label for="Radiography/Medical Imaging"> Endocrinology</label><br>
                      <input type="checkbox" id="vehicle1" name="checkbox26[]" value="Immunology">
                     <label for="Respiratory Therapy"> Immunology</label><br>
                   <input type="checkbox" id="vehicle1" name="checkbox26[]" value="Gastroenterology">
                     <label for="Sonography"> Medical Gastroenterology</label><br>
                       <input type="checkbox" id="vehicle1" name="checkbox26[]" value=" Medical Genetics">
                     <label for="Speach Pathology"> Medical Genetics </label><br>
                      <input type="checkbox" id="vehicle1" name="checkbox26[]" value="Medical Oncology">
                     <label for="Speach Pathology"> Medical Oncology </label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox26[]" value="Neonatology">
                     <label for="Speach Pathology"> Neonatology </label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox26[]" value="Nephrology">
                     <label for="Speach Pathology"> Nephrology </label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox26[]" value="Neurology">
                     <label for="Speach Pathology"> Neurology </label><br>
                     <input type="checkbox" id="vehicle1" name="checkbox26[]" value="Medical Genetics">
                     <label for="Speach Pathology"> Medical Genetics </label><br>
                    <br>
                   </ul>
                 </div>
              <div class="form-navigation mt-3">
                 <button type="button" class="previous btn btn-primary float-left">&lt; Previous</button>
                 <button type="button" class="next btn btn-primary float-right">Next &gt;</button>
                 <button type="submit" class="btn btn-success float-right">Submit</button>
              </div>

            </form>
        </div>
            
        </div>
      </div>
    </div>




<script>

    $(function(){
        var $sections=$('.form-section');

        function navigateTo(index){

            $sections.removeClass('current').eq(index).addClass('current');

            $('.form-navigation .previous').toggle(index>0);
            var atTheEnd = index >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [Type=submit]').toggle(atTheEnd);

     
            const step= document.querySelector('.step'+index);
            step.style.backgroundColor="#17a2b8";
            step.style.color="white";



        }

        function curIndex(){

            return $sections.index($sections.filter('.current'));
        }

        $('.form-navigation .previous').click(function(){
            navigateTo(curIndex() - 1);
        });

        $('.form-navigation .next').click(function(){
            $('.employee-form').parsley().whenValidate({
                group:'block-'+curIndex()
            }).done(function(){
                navigateTo(curIndex()+1);
            });

        });

        $sections.each(function(index,section){
            $(section).find(':input').attr('data-parsley-group','block-'+index);
        });


        navigateTo(0);



    });


</script>



  </body>
</html>



