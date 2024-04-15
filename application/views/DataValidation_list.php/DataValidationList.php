<!DOCTYPE html>
<html>

<head>

<style>
    body {
        background: linear-gradient(109.6deg, rgb(44, 83, 131) 18.9%, rgb(95, 175, 201) 91.1%);
        font-family: 'Quicksand', sans-serif;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .button-container {
    display: grid;
    grid-template-columns: auto; /* Change from repeat(5, auto) to auto */
    grid-template-rows: repeat(3, auto); /* Set it to the number of buttons you have */
    gap: 10px;
    padding: 20px;
}


    .button {
        width: 100px;
        height: 50px;
        background-color: #ffffff;
        border: none;
        border-radius: 10px;
        font-size: 18px;
        color: #333333;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .button:hover {
        transform: translateY(-3px);
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
    }
</style>
</head>

<body style="background: linear-gradient(109.6deg, rgb(44, 83, 131) 18.9%, rgb(95, 175, 201) 91.1%);">
<div style="text-align: center; color: white; font-size: 2em; font-family: 'Times New Roman', Times, serif;">DATA VALIDATION</div>


    <div class="button-container">
    <button class="button">Button 1</button>
    <button class="button">Button 2</button>
    <button class="button">Button 3</button>
</div>
</body>

</html>