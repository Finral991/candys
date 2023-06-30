<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>sweet</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url("R.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 20px;
    }
    
    h1 {
      text-align: center;
      color: #fff;
    }
    
    .car-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    
    .car {
      width: 400px;
      margin: 20px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      overflow: hidden;
    }
    
    .car img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }
    
    .car-details {
      padding: 20px;
    }
    
    .car-title {
      font-size: 20px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
    }
    
    .car-description {
      font-size: 16px;
      color: #555;
      margin-bottom: 20px;
    }
    
    .car-history {
      font-size: 14px;
      color: #888;
    }
    
    .frame {
      border: 2px solid #ff9800;
      padding: 10px;
      border-radius: 5px;
    }
    
    .button-container {
      position: absolute;
      top: 20px;
      left: 20px;
    }
    
    .button {
      padding: 10px 20px;
      background-color: #ff9800;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="button-container">
    <button class="button" onclick="window.location.href = 'index.html'">Go Back</button>
  </div>
  
  <h1>sweet</h1>
  
  <div class="car-container">
  <div class="car">
      <div class="frame">
        <img src="ice-cream.jpg" alt="ice cream">
      </div>
      <div class="car-details">
        <h2 class="car-title">Морозиво</h2>
        <p class="car-description">Морозиво - це ідеальна страва для тих, хто любить свіжий літній настрій. У нашій кондитерській ви знайдете широкий вибір найсмачніших морозив, які задовольнять будь-який смак. Ми виготовляємо морозиво різних смаків - від класичних, до більш екзотичних.</p>
      </div>
    </div>
    
    <div class="car">
      <div class="frame">
        <img src="lollipops.jpg" alt="lollipops">
      </div>
      <div class="car-details">
        <h2 class="car-title">Льодяники</h2>
        <p class="car-description">Льодяники - це чудовий спосіб зробити свій день трохи солодшим та освіжити гарячий літній день. Кожен льодяник містить найтонші шматочки фруктів, які роблять його таким освіжаючим та насиченим смаком.</p>
      </div>
    </div>
    
    <div class="car">
      <div class="frame">
        <img src="choco.jpg" alt="chocolate">
      </div>
      <div class="car-details">
        <h2 class="car-title">Шоколад</h2>
        <p class="car-description">Якщо ви любите насолоджуватися смаком найкращого шоколаду, то ми радимо звернутися до нашої кондитерської, де ви знайдете широкий вибір найкращих шоколадних десертів.
                Наші майстри використовують тільки найкращі сорти какао-бобів та інших інгредієнтів.</p>
      </div>
    </div>

    
  </div>
</body>
</html>



