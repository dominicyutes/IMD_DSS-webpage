<style>
@import "~@fortawesome/fontawesome-free/css/all.min.css";
@import url("https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Playfair+Display&family=Roboto+Condensed&family=Roboto+Slab&family=Yeseva+One&display=swap");


._body {
    font-family: "Roboto Condensed", sans-serif;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-size: cover;
    background: #44a08d;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right,
            #093637,
            #44a08d);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #093637, #44a08d);
}

.login-container {
    background-color: #b2bec53d;
    border-radius: 4px;
    box-shadow: 15px -14px 8px 2px rgb(45 38 38 / 46%);
    padding: 20px;
    width: 35%;
    text-align: center;
}

.login-container h2 {
    letter-spacing: 4px;
    margin: 4% 0;
    font-size: 40px;
    font-weight: bolder;
    color: #332e2e;
}

.input-container {
    margin-bottom: 20px;
}

.input-container label {
    display: flex;
    margin-bottom: 5px;
    font-size: 17px;
    font-weight: bold;
    padding: 5px;
}

.input-container label i {
    padding: 5px;
}

.input-container input {
    width: 90%;
    padding: 8px;
    border: 2px solid #ccc;
    border-radius: 5px;
}

.btn-container {
    display: flex;
    justify-content: center;
}

.btn {
    width: 25%;
    margin-top: 5%;
    padding: 10px 15px;
    background-color: #f3f3f3;
    color: #151515f0;
    border: none;
    border-radius: 0 30px 0 30px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-weight: bold;
    cursor: pointer;
}

.btn:hover {
    background-color: #19534f;
    color: #fff;
    font-weight: bolder;
    border-radius: 30px 0 30px 0;
}
</style>