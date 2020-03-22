@extends('layouts.master')

@section('head')

@section('content')
<p>
<h2>Body mass index (BMI) is a measure of body fat based on height and weight that applies to adult men and women.</h2>
</p>
    <br>
    <br>
    <h3>BMI Categories:</h3>
    <br>Underweight = < 18.5
    <br>Normal  = 18.5–24.9
    <br>Overweight = 25–29.9
    <br>Obesity = 30-39.9
    <br>Morbidly Obese = >40
           
    <br>
    <br> 

    <h1>Please follow these guidelines as indicated below to determine what range you fall under: </h1>
    <br>1. Select your gender.
    <br>2. Enter your height in inches.   
    <br>3. Enter your weight in pounds.
    <br>4. This calculator has a height limit of up to 7' (84 inches).
    <br>***All Fields are Required.***
    <br>
    <br>
    <br>
    <form method='GET' action='/forms'>
    <br>      
    <br>

        @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
          <li class='error'>{{ $error }}</li>
        @endforeach
    </ul>
        @endif
      
    <legend><h1>BMI Calculator</h1></legend>
    <br>

<fieldset> 
     <h4>Step 1.</h4>
     <h3>Please select your Gender:</h3>
   
    <div>
    
    <input type='radio' id='gender' name='gender' value='Male'>
    <label for='Male'>Male</label><br>
        
    <input type='radio' id='gender' name='gender' value='Female'>
    <label for='Female'>Female</label><br>
    
         
    </div>

</fieldset>
 
    <div>
    <br>
    <br>    

<fieldset>
<p><h4>Step 2.</h4> 
<h3>Please enter your height in Inches:</h3>  </p>      
     <div id='height-block'>
            <label>Height in inches
           
                <select name="heightInches" >
                    <option value="0" {{ (old('heightInches')=='0') ? 'selected' : '' }}>0</option>
                    <option value="1" {{ (old('heightInches')=='1') ? 'selected' : '' }}>1</option>
                    <option value="2" {{ (old('heightInches')=='2') ? 'selected' : '' }}>2</option>
                    <option value="3" {{ (old('heightInches')=='3') ? 'selected' : '' }}>3</option>
                    <option value="4" {{ (old('heightInches')=='4') ? 'selected' : '' }}>4</option>
                    <option value="5" {{ (old('heightInches')=='5') ? 'selected' : '' }}>5</option>
                    <option value="6" {{ (old('heightInches')=='6') ? 'selected' : '' }}>6</option>
                    <option value="7" {{ (old('heightInches')=='7') ? 'selected' : '' }}>7</option>
                    <option value="8" {{ (old('heightInches')=='8') ? 'selected' : '' }}>8</option>
                    <option value="9" {{ (old('heightInches')=='9') ? 'selected' : '' }}>9</option>
                    <option value="10" {{ (old('heightInches')=='10') ? 'selected' : '' }}>10</option>
                    <option value="11" {{ (old('heightInches')=='11') ? 'selected' : '' }}>11</option>
                    <option value="12" {{ (old('heightInches')=='12') ? 'selected' : '' }}>12</option>
                    <option value="13" {{ (old('heightInches')=='13') ? 'selected' : '' }}>13</option>
                    <option value="14" {{ (old('heightInches')=='14') ? 'selected' : '' }}>14</option>
                    <option value="15" {{ (old('heightInches')=='15') ? 'selected' : '' }}>15</option>
                    <option value="16" {{ (old('heightInches')=='16') ? 'selected' : '' }}>16</option>
                    <option value="17" {{ (old('heightInches')=='17') ? 'selected' : '' }}>17</option>
                    <option value="18" {{ (old('heightInches')=='18') ? 'selected' : '' }}>18</option>
                    <option value="19" {{ (old('heightInches')=='19') ? 'selected' : '' }}>19</option>
                    <option value="20" {{ (old('heightInches')=='20') ? 'selected' : '' }}>20</option>
                    <option value="21" {{ (old('heightInches')=='21') ? 'selected' : '' }}>21</option>
                    <option value="22" {{ (old('heightInches')=='22') ? 'selected' : '' }}>22</option>
                    <option value="23" {{ (old('heightInches')=='23') ? 'selected' : '' }}>23</option>
                    <option value="24" {{ (old('heightInches')=='24') ? 'selected' : '' }}>24</option>
                    <option value="25" {{ (old('heightInches')=='25') ? 'selected' : '' }}>25</option>
                    <option value="26" {{ (old('heightInches')=='26') ? 'selected' : '' }}>26</option>
                    <option value="27" {{ (old('heightInches')=='27') ? 'selected' : '' }}>27</option>
                    <option value="28" {{ (old('heightInches')=='28') ? 'selected' : '' }}>28</option>
                    <option value="29" {{ (old('heightInches')=='29') ? 'selected' : '' }}>29</option>
                    <option value="30" {{ (old('heightInches')=='30') ? 'selected' : '' }}>30</option>
                    <option value="31" {{ (old('heightInches')=='31') ? 'selected' : '' }}>31</option>
                    <option value="32" {{ (old('heightInches')=='32') ? 'selected' : '' }}>32</option>
                    <option value="33" {{ (old('heightInches')=='33') ? 'selected' : '' }}>33</option>
                    <option value="34" {{ (old('heightInches')=='34') ? 'selected' : '' }}>34</option>
                    <option value="35" {{ (old('heightInches')=='35') ? 'selected' : '' }}>35</option>
                    <option value="36" {{ (old('heightInches')=='36') ? 'selected' : '' }}>36</option>
                    <option value="37" {{ (old('heightInches')=='37') ? 'selected' : '' }}>37</option>
                    <option value="38" {{ (old('heightInches')=='38') ? 'selected' : '' }}>38</option>
                    <option value="39" {{ (old('heightInches')=='39') ? 'selected' : '' }}>39</option>
                    <option value="40" {{ (old('heightInches')=='40') ? 'selected' : '' }}>40</option>
                    <option value="41" {{ (old('heightInches')=='41') ? 'selected' : '' }}>41</option>
                    <option value="42" {{ (old('heightInches')=='42') ? 'selected' : '' }}>42</option>
                    <option value="43" {{ (old('heightInches')=='43') ? 'selected' : '' }}>43</option>
                    <option value="44" {{ (old('heightInches')=='44') ? 'selected' : '' }}>44</option>
                    <option value="45" {{ (old('heightInches')=='45') ? 'selected' : '' }}>45</option>
                    <option value="46" {{ (old('heightInches')=='46') ? 'selected' : '' }}>46</option>
                    <option value="47" {{ (old('heightInches')=='47') ? 'selected' : '' }}>47</option>
                    <option value="48" {{ (old('heightInches')=='48') ? 'selected' : '' }}>48</option>
                    <option value="49" {{ (old('heightInches')=='49') ? 'selected' : '' }}>49</option>
                    <option value="50" {{ (old('heightInches')=='50') ? 'selected' : '' }}>50</option>
                    <option value="51" {{ (old('heightInches')=='51') ? 'selected' : '' }}>51</option>
                    <option value="52" {{ (old('heightInches')=='52') ? 'selected' : '' }}>52</option>
                    <option value="53" {{ (old('heightInches')=='53') ? 'selected' : '' }}>53</option>
                    <option value="54" {{ (old('heightInches')=='54') ? 'selected' : '' }}>54</option>
                    <option value="55" {{ (old('heightInches')=='55') ? 'selected' : '' }}>55</option>
                    <option value="56" {{ (old('heightInches')=='56') ? 'selected' : '' }}>56</option>
                    <option value="57" {{ (old('heightInches')=='57') ? 'selected' : '' }}>57</option>
                    <option value="58" {{ (old('heightInches')=='58') ? 'selected' : '' }}>58</option>
                    <option value="59" {{ (old('heightInches')=='59') ? 'selected' : '' }}>59</option>
                    <option value="60" {{ (old('heightInches')=='60') ? 'selected' : '' }}>60</option>
                    <option value="61" {{ (old('heightInches')=='61') ? 'selected' : '' }}>61</option>
                    <option value="62" {{ (old('heightInches')=='62') ? 'selected' : '' }}>62</option>
                    <option value="63" {{ (old('heightInches')=='63') ? 'selected' : '' }}>63</option>
                    <option value="64" {{ (old('heightInches')=='64') ? 'selected' : '' }}>64</option>
                    <option value="65" {{ (old('heightInches')=='65') ? 'selected' : '' }}>65</option>
                    <option value="66" {{ (old('heightInches')=='66') ? 'selected' : '' }}>66</option>
                    <option value="67" {{ (old('heightInches')=='67') ? 'selected' : '' }}>67</option>
                    <option value="68" {{ (old('heightInches')=='68') ? 'selected' : '' }}>68</option>
                    <option value="69" {{ (old('heightInches')=='69') ? 'selected' : '' }}>69</option>
                    <option value="70" {{ (old('heightInches')=='70') ? 'selected' : '' }}>70</option>
                    <option value="71" {{ (old('heightInches')=='71') ? 'selected' : '' }}>71</option>
                    <option value="72" {{ (old('heightInches')=='72') ? 'selected' : '' }}>72</option>
                    <option value="73" {{ (old('heightInches')=='73') ? 'selected' : '' }}>73</option>
                    <option value="74" {{ (old('heightInches')=='74') ? 'selected' : '' }}>74</option>
                    <option value="75" {{ (old('heightInches')=='75') ? 'selected' : '' }}>75</option>
                    <option value="76" {{ (old('heightInches')=='76') ? 'selected' : '' }}>76</option>
                    <option value="77" {{ (old('heightInches')=='77') ? 'selected' : '' }}>77</option>
                    <option value="78" {{ (old('heightInches')=='78') ? 'selected' : '' }}>78</option>
                    <option value="79" {{ (old('heightInches')=='79') ? 'selected' : '' }}>79</option>
                    <option value="80" {{ (old('heightInches')=='80') ? 'selected' : '' }}>80</option>
                    <option value="81" {{ (old('heightInches')=='81') ? 'selected' : '' }}>81</option>
                    <option value="82" {{ (old('heightInches')=='82') ? 'selected' : '' }}>82</option>
                    <option value="83" {{ (old('heightInches')=='83') ? 'selected' : '' }}>83</option>
                    <option value="84" {{ (old('heightInches')=='84') ? 'selected' : '' }}>84</option>
                </select>
            </div> 
</fieldset>  
    <br> 
    <br>   
<fieldset>                                
    <p><h4>Step 3.</h4><h3> Please enter your weight in pounds:</h3> <p>  
    <div id='weight-block'>
            <label>Weight in lbs.<br><br>
                <input type="number" name='weight' step='1.0' value='{{ old("weight") }}'>
            </label>
        </div>
    <div>
    <br>
    <button type='submit' title='Calculate BMI Now'>Find your BMI</button>
    </div> 
</fieldset>
	</form>

    <br>
    <br> 
      
@endsection

