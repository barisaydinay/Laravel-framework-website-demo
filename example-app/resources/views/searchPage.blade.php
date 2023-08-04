<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Movie & Series Finder</title>

<style>
    header {
        background-color: #FFB900;
        padding: 20px;
        display: flex;
        text-align: center;
        justify-content: space-between;
        align-items: center;
    }

    h1 {
        color: black;
        font-size: 40px;
        margin-right: 780px;
        font-family: Arial, sans-serif;
    }

    .logo {
        width: 75px;
        margin-right: auto;
    }

    
    textarea {
        margin-top: 100px;
    }



</style>

</head>
<body>


<header>
    <img class="logo" src="/images/movielogo.png" alt="Logo">
    <h1>Movie & Series Finder</h1>
</header>

<form action="{{route('result')}}" method="post">
    @csrf
    
    <textarea name="metin" placeholder="Movie & Series" ></textarea><br>

  
    <select name="country">
    <option value="USA">United States</option>
        <option value="UK">United Kingdom</option>
        <option value="Canada">Canada</option>
        <option value="Australia">Australia</option>    
        <option value="Germany">Germany</option>
        <option value="France">France</option>
        <option value="Japan">Japan</option>
        <option value="Brazil">Brazil</option>
        <option value="India">India</option>
        <option value="China">China</option>
        <option value="Italy">Italy</option>
        <option value="Mexico">Mexico</option>
        <option value="Spain">Spain</option>
        <option value="South Korea">South Korea</option>
        <option value="Netherlands">Netherlands</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Argentina">Argentina</option>
        <option value="Russia">Russia</option>
        <option value="Turkey">Turkey</option>
        <option value="Egypt">Egypt</option>
        <option value="Greece">Greece</option>
        <option value="Israel">Israel</option>
        <option value="Norway">Norway</option>
        <option value="Portugal">Portugal</option>
        <option value="Singapore">Singapore</option>
        <option value="Thailand">Thailand</option>
        <option value="United Arab Emirates">United Arab Emirates</option>
        <option value="Vietnam">Vietnam</option>
        <option value="South Africa">South Africa</option>
    </select>

    <input type="submit" name="ilet" value="Find">
</form>


</body>
</html> 