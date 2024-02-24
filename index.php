    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Crop Yield Prediction</title>

        <link rel="stylesheet" href="style.css">

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <!-- Font Awesome JS -->
        <script src="https://kit.fontawesome.com/728d1d3dec.js" crossorigin="anonymous"></script>

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </head>

        <body>
            <div class="svgs">
                <img src="imgs/website.svg">
            </div>
            
            <div class="container p-5 page" id="part3">
                <div class="imgContainer">
                    <img src="imgs/plants.svg" alt="">
                </div>
               
                <div class="card shadow-lg col-6 p-0 mx-auto">
                    <div class="card-header text-primary text-center">
                        <h3><u>Crop Yield Prediction</u></h3>
                    </div>
              <form role="form" action="#" method="post" >
                    <div class="card-body">
                    <div class="form-group">
                            <label for="district">State:</label>
                            <select class="form-control" name="state" id="state" required>
                            <option value="Karnataka">Karnataka</option>
                            </select>
                  </div>
                        
                        <div class="form-group">
                            <label for="district">District:</label>
                            <select class="form-control" name="district" id="district" required>
                                                  <option value="">Select a district</option>
                              <option value="BAGALKOT">Bagalkot</option>
                              <option value="BANGALORE_RURAL">Bangalore Rural</option>
                              <option value="BELGAUM">Belgaum</option>
                              <option value="BELLARY">Bellary</option>
                              <option value="BENGALURU_URBAN">Bengaluru Urban</option>
                              <option value="BIDAR">Bidar</option>
                              <option value="BIJAPUR">Bijapur</option>
                              <option value="CHAMARAJANAGAR">Chamarajanagar</option>
                              <option value="CHIKBALLAPUR">Chikballapur</option>
                              <option value="CHIKMAGALUR">Chikmagalur</option>
                              <option value="CHITRADURGA">Chitradurga</option>
                              <option value="DAKSHIN_KANNAD">Dakshin Kannad</option>
                              <option value="DAVANGERE">Davangere</option>
                              <option value="DHARWAD">Dharwad</option>
                              <option value="GADAG">Gadag</option>
                              <option value="GULBARGA">Gulbarga</option>
                              <option value="HAVERI">Haveri</option>
                              <option value="HASSAN">Hassan</option>
                              <option value="KODAGU">Kodagu</option>
                              <option value="KOLAR">Kolar</option>
                              <option value="KOPPAL">Koppal</option>
                              <option value="MANDYA">Mandya</option>
                              <option value="MYSORE">Mysore</option>
                              <option value="RAMANAGARA">Ramanagara</option>
                              <option value="RAICHUR">Raichur</option>
                              <option value="SHIMOGA">Shimoga</option>
                              <option value="TUMKUR">Tumkur</option>
                              <option value="UDUPI">Udupi</option>
                              <option value="UTTAR_KANNAD">Uttar Kannad</option>
                              <option value="YADGIR">Yadgir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="district">Season:</label>				
                                            <select name="Season" class="form-control" id="season" required>
                                            <option value="">Select Season ...</option>
                                            <option name="Kharif" value="Kharif">Kharif</option>
                                            <option name="Rabi" value="Rabi">Rabi</option>
                                            <option name="Summer" value="Summer">Summer</option>
                                            <option name="WholeYear" value="WholeYear">Whole Year</option>
                                            </select>
                        </div>


                        <div class="form-group">
                            <label for="crop">Crop:</label>
                            <select class="form-control" name="crops" id="crop"  required>
                            <option value="">Select crop</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="area">Area(in hectacres):</label>
                            <input type="number" min="100" max="10000000" class="form-control" name="area" id="area" placeholder="Enter area">
                        </div>

                <script> 

          // district crop dropdown for yield prediction    state_district_crops_dropdown.js

                const cropOptions = {
                          BAGALKOT: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Mesta', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Onion', 'Other Rabi pulses', 'Rapeseed &Mustard', 'Safflower', 'Sunflower', 'Wheat'],
                            Summer: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Rice', 'Sunflower'],
                            WholeYear: ['Arecanut', 'Arcanut (Processed)', 'Atcanut (Raw)', 'Banana', 'Black pepper', 'Brinjal', 'Cashewnut', 'Citrus Fruit', 'Coconut', 'Coriander', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Garlic', 'Grapes', 'Mango', 'Mesta', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Pome Fruit', 'Sannhamp', 'Sugarcane', 'Sweet potato', 'Tobacco', 'Tomato', 'Turmeric']
                          },
                          BANGALORE_RURAL: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Peas & beans (Pulses)', 'Paddy', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Maize', 'Onion', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arcanut', 'Arcanut (Processed)', 'Atcanut (Raw)', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cardamom', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut', 'Coriander', 'Dry chillies', 'Dry ginger', 'Garlic', 'Grapes', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sugarcane', 'Sweet potato', 'Tapioca', 'Tomato', 'Tobacco', 'Turmeric']
                          },
                          BELGAUM: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Mesta', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Safflower', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Rice', 'Sunflower'],
                            WholeYear: ['Arecanut', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Coriander', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Grapes', 'Mango', 'Mesta', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sannhamp', 'Sugarcane', 'Sweet potato', 'Tapioca', 'Tomato', 'Tobacco', 'Turmeric']
                          },
                          BELLARY: {
                            Kharif: ['Castor seed', 'Cowpea(Lobia)', 'Dry ginger', 'Gram', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad', 'Cotton(lint)'],
                            Rabi: ['Bajra', 'Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Bajra', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Potato', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arecanut', 'Arcanut (Processed)', 'Atcanut (Raw)', 'Banana', 'Brinjal', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Garlic', 'Grapes', 'Mango', 'Mesta', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Pome Fruit', 'Sannhamp', 'Sugarcane', 'Tomato', 'Turmeric']
                          },
                          BENGALURU_URBAN: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Black pepper', 'Castor seed', 'Cowpea(Lobia)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Peas & beans (Pulses)', 'Paddy', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Sunflower', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Peas & beans (Pulses)', 'Potato', 'Rapeseed &Mustard', 'Rice', 'Rice', 'Sunflower'],
                            Summer: ['Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arecanut', 'Arcanut (Processed)', 'Atcanut (Raw)', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cashewnut', 'Coconut ', 'Coriander', 'Dry chillies', 'Dry ginger', 'Garlic', 'Grapes', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sugarcane', 'Sweet potato', 'Tapioca', 'Tomato', 'Turmeric']
                          },
                          BIDAR: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Mesta', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Dry chillies', 'Gram', 'Groundnut', 'Jowar', 'Linseed', 'Maize', 'Onion', 'Other Rabi pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Wheat'],
                            Summer: ['Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Peas & beans (Pulses)', 'Potato', 'Rice', 'Sunflower'],
                            WholeYear: ['Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Cotton(lint)', 'Coriander', 'Dry chillies', 'Dry ginger', 'Garlic', 'Grapes', 'Mango', 'Mesta', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sannhamp', 'Sugar cane', 'Sweet potato', 'Tomato', 'Turmeric']
                          },
                          BIJAPUR: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Potato', 'Rice', 'Safflower', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Potato', 'Sunflower'],
                            WholeYear: ['Banana', 'Beans & Mutter(Vegetable)', 'Brinjal', 'Citrus Fruit', 'Cotton(lint)', 'Dry chillies', 'Garlic', 'Grapes', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Sugarcane', 'Sweet potato', 'Tomato', 'Turmeric', 'Coconut']
                          },
                          CHAMARAJANAGAR: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Groundnut', 'Gram', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Cotton(lint)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arecanut', 'Arcanut (Processed)', 'Atcanut (Raw)', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cardamom', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut', 'Coriander', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Garlic', 'Grapes', 'Mango', 'Onion', 'Other Fresh Fruits', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sannhamp', 'Sugarcane', 'Tapioca', 'Tomato', 'Turmeric', 'Tobacco']
                          },
                          CHIKBALLAPUR: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Small millets', 'Sunflower'],
                            Rabi: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Maize', 'Onion', 'Other Rabi pulses', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sunflower'],
                            Summer: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Groundnut', 'Maize', 'Onion', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arecanut', 'Banana', 'Cashewnut', 'Coconut', 'Coriander', 'Dry ginger', 'Garlic', 'Sugarcane', 'Sweet potato', 'Turmeric']
                          },
                          CHIKMAGALUR: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Black pepper', 'Castor seed', 'Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Mesta', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Onion', 'Other Rabi pulses', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Peas & beans (Pulses)', 'Rice', 'Sunflower'],
                            WholeYear: ['Arecanut', 'Cardamom', 'Coriander', 'Garlic', 'Sugarcane', 'Turmeric', 'Black pepper', 'Coconut', 'Dry chillies', 'Banana', 'Onion', 'Potato', 'Sweet potato', 'Tapioca', 'Tobacco', 'Peas & beans (Pulses)', 'Arcanut (Processed)', 'Atcanut (Raw)', 'Beans & Mutter(Vegetable)', 'Brinjal', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Grapes', 'Mango', 'Other Fresh Fruits', 'Pome Fruit', 'Tomato', 'Cotton(lint)', 'Dry ginger', 'Cashewnut', 'Papaya', 'Sannhamp']
                          },
                          CHITRADURGA: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Bajra', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Paddy', 'Peas & beans (Pulses)', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Wheat'],
                            Summer: ['Bajra', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Peas & beans (Pulses)', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arcanut (Processed)', 'Atcanut (Raw)', 'Arecanut', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Cotton(lint)', 'Dry chillies', 'Garlic', 'Grapes', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Sugarcane', 'Tomato', 'Turmeric', 'Tobacco']
                          },
                          DAKSHIN_KANNAD: {
                            Kharif: ['Black pepper', 'Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Dry ginger', 'Horse-gram', 'Moong(Green Gram)', 'Other Kharif pulses', 'Paddy', 'Rice', 'Sesamum', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Moong(Green Gram)', 'Other Rabi pulses', 'Paddy', 'Rice', 'Urad'],
                            Summer:['Cowpea(Lobia)', 'Dry chillies', 'Maize', 'Paddy', 'Rice'],
                            WholeYear: ['Arcanut (Processed)', 'Atcanut (Raw)', 'Arecanut', 'Banana', 'Black pepper', 'Brinjal', 'Cardamom', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Dry chillies', 'Dry ginger', 'Mango', 'Other Fresh Fruits', 'Papaya', 'Pome Fruit', 'Sugarcane', 'Sweet potato', 'Tapioca', 'Turmeric']
                          },
                          DAVANGERE: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Mesta', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad', 'Cotton(lint)'],
                            Rabi: ['Bajra', 'Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Peas & beans (Pulses)', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Bajra', 'Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Peas & beans (Pulses)', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arecanut', 'Arcanut (Processed)', 'Atcanut (Raw)', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cardamom', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut', 'Coriander', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Garlic', 'Grapes', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sannhamp', 'Sugarcane', 'Sweet potato', 'Tobacco', 'Tomato', 'Turmeric']
                          },
                          DHARWAD: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Mesta', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Potato', 'Rice', 'Sunflower'],
                            WholeYear: ['Arcanut (Processed)', 'Atcanut (Raw)', 'Arecanut', 'Banana', 'Black pepper', 'Brinjal', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Garlic', 'Mango', 'Mesta', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sannhamp', 'Sugarcane', 'Sweet potato', 'Tomato', 'Tobacco', 'Turmeric']
                          },
                          GADAG: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Mesta', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Onion', 'Other Rabi pulses', 'Peas & beans (Pulses)', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Wheat'],
                            Summer: ['Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Peas & beans (Pulses)', 'Rice', 'Sunflower'],
                            WholeYear:['Arecanut', 'Banana', 'Beans & Mutter(Vegetable)', 'Brinjal', 'Citrus Fruit', 'Cotton(lint)', 'Coriander', 'Dry chillies', 'Dry ginger', 'Garlic', 'Grapes', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Pome Fruit', 'Potato', 'Sannhamp', 'Sugarcane', 'Sweet potato', 'Tomato', 'Tobacco', 'Turmeric']
                          },
                          GULBARGA: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Mesta', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Bajra', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Paddy', 'Potato', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Wheat'],
                            Summer: ['Bajra', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Rice', 'Sunflower'],
                            WholeYear: ['Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Cotton(lint)', 'Coriander', 'Coconut ', 'Dry chillies', 'Dry ginger', 'Garlic', 'Grapes', 'Mango', 'Mesta', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Pome Fruit', 'Potato', 'Sannhamp', 'Sugarcane', 'Sweet potato', 'Tobacco', 'Tomato', 'Turmeric']
                          },
                          HAVERI: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Mesta', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Peas & beans (Pulses)', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Bajra', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Peas & beans (Pulses)', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arecanut', 'Arcanut (Processed)', 'Atcanut (Raw)', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut', 'Coriander', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Garlic', 'Mango', 'Mesta', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sannhamp', 'Sugarcane', 'Sweet potato', 'Tomato', 'Tobacco', 'Turmeric']
                          },
                          HASSAN: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Black pepper', 'Castor seed', 'Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sunflower', 'Urad'],
                            Summer: ['Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Maize', 'Onion', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arcanut (Processed)', 'Atcanut (Raw)', 'Arecanut', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cardamom', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Cotton(lint)', 'Coriander', 'Dry chillies', 'Dry ginger', 'Garlic', 'Grapes', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sannhamp', 'Sugarcane', 'Sweet potato', 'Tapioca', 'Tomato', 'Turmeric']
                          },
                          KODAGU: {
                            Kharif: ['Arhar/Tur', 'Black pepper', 'Castor seed', 'Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Dry ginger', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sesamum', 'Sunflower'],
                            Rabi: ['Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Maize', 'Other Rabi pulses', 'Paddy', 'Peas & beans (Pulses)', 'Ragi', 'Rice'],
                            Summer: ['Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Maize', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice'],
                            WholeYear: ['Arcanut (Processed)', 'Atcanut (Raw)', 'Arecanut', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cardamom', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut', 'Dry chillies', 'Dry ginger', 'Mango', 'Onion', 'Other Fresh Fruits', 'Pome Fruit', 'Potato', 'Sugarcane', 'Sweet potato', 'Tapioca', 'Tobacco', 'Tomato', 'Turmeric']
                          },
                          KOLAR: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Sunflower', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sunflower'],
                            Summer: ['Dry chillies', 'Groundnut', 'Maize', 'Onion', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arcanut (Processed)', 'Arecanut', 'Atcanut (Raw)', 'Banana', 'Beans & Mutter(Vegetable)', 'Brinjal', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Coriander', 'Dry chillies', 'Garlic', 'Grapes', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sugarcane', 'Tomato', 'Turmeric']
                          },
                          KOPPAL: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Peas & beans (Pulses)', 'Rice', 'Sesamum', 'Small millets', 'Sunflower', 'Urad'],
                            Rabi: ['Bajra', 'Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Bajra', 'Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Peas & beans (Pulses)', 'Rice', 'Sunflower'],
                            WholeYear: ['Banana', 'Brinjal', 'Citrus Fruit', 'Cotton(lint)', 'Coconut', 'Coriander', 'Dry chillies', 'Grapes', 'Mango', 'Mesta', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Pome Fruit', 'Potato', 'Sannhamp', 'Sugarcane', 'Sweet potato', 'Tomato', 'Turmeric']
                          },
                          MANDYA: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Peas & beans (Pulses)', 'Paddy', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad', 'Potato'],
                            Rabi: ['Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Cowpea(Lobia)', 'Dry chillies', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arcanut (Processed)', 'Arecanut', 'Atcanut (Raw)', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Cotton(lint)', 'Coriander', 'Dry chillies', 'Dry ginger', 'Garlic', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sugarcane', 'Sweet potato', 'Tapioca', 'Tomato', 'Tobacco', 'Turmeric']
                          },
                          MYSORE: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Black pepper', 'Castor seed', 'Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arcanut (Processed)', 'Atcanut (Raw)', 'Arecanut', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cotton(lint)', 'Cardamom', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Coriander', 'Dry chillies', 'Dry ginger', 'Garlic', 'Mango', 'Mesta', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sugarcane', 'Sweet potato', 'Tapioca', 'Tomato', 'Turmeric']
                          },
                          RAMANAGARA: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Sunflower', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Maize', 'Other Rabi pulses', 'Peas & beans (Pulses)', 'Ragi', 'Rapeseed &Mustard', 'Rice'],
                            Summer: ['Dry chillies', 'Groundnut', 'Maize', 'Peas & beans (Pulses)', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arecanut', 'Banana', 'Black pepper', 'Cashewnut', 'Coconut', 'Coriander', 'Dry ginger', 'Garlic', 'Sugarcane', 'Sweet potato', 'Tapioca', 'Turmeric', 'Tobacco']
                          },
                          RAICHUR: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Bajra', 'Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Rice', 'Sunflower'],
                            WholeYear: ['Banana', 'Brinjal', 'Citrus Fruit', 'Cotton(lint)', 'Coriander', 'Coconut', 'Dry chillies', 'Grapes', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Sannhamp', 'Sugarcane', 'Sweet potato', 'Tomato', 'Tobacco', 'Turmeric']
                          },
                          SHIMOGA: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Black pepper', 'Castor seed', 'Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Mesta', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Peas & beans (Pulses)', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arecanut', 'Arcanut (Processed)', 'Atcanut (Raw)', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cardamom', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Coriander', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Garlic', 'Mango', 'Onion', 'Other Fresh Fruits', 'Peas & beans (Pulses)', 'Pome Fruit', 'Sannhamp', 'Sugarcane', 'Tapioca', 'Tobacco', 'Tomato', 'Turmeric']
                          },
                          TUMKUR: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cowpea(Lobia)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Small millets', 'Soyabean', 'Sunflower', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Cowpea(Lobia)', 'Cotton(lint)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Peas & beans (Pulses)', 'Potato', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arcanut (Processed)', 'Atcanut (Raw)', 'Arecanut', 'Banana', 'Beans & Mutter(Vegetable)', 'Black pepper', 'Brinjal', 'Cardamom', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Garlic', 'Grapes', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Peas & beans (Pulses)', 'Pome Fruit', 'Potato', 'Sannhamp', 'Sugarcane', 'Sweet potato', 'Tapioca', 'Tobacco', 'Tomato', 'Turmeric']
                          },
                          UDUPI: {
                            Kharif: ['Dry chillies', 'Dry ginger', 'Groundnut', 'Horse-gram', 'Moong(Green Gram)', 'Other Kharif pulses', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Urad'],
                            Rabi: ['Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Rapeseed &Mustard', 'Rice', 'Sunflower', 'Urad'],
                            Summer: ['Cowpea(Lobia)', 'Dry chillies', 'Maize', 'Rice'],
                            WholeYear: ['Arecanut', 'Arcanut (Processed)', 'Atcanut (Raw)', 'Banana', 'Black pepper', 'Brinjal', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut', 'Dry chillies', 'Dry ginger', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Pome Fruit', 'Sugarcane', 'Sweet potato', 'Tapioca', 'Turmeric']
                          },
                          UTTAR_KANNAD: {
                            Kharif: ['Arhar/Tur', 'Black pepper', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Mesta', 'Moong(Green Gram)', 'Other Kharif pulses', 'Paddy', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Sesamum', 'Soyabean', 'Sunflower'],
                            Rabi: ['Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Other Rabi pulses', 'Paddy', 'Ragi', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Urad'],
                            Summer: ['Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Paddy', 'Ragi', 'Rice', 'Sunflower'],
                            WholeYear: ['Arcanut (Processed)', 'Atcanut (Raw)', 'Banana', 'Black pepper', 'Brinjal', 'Cardamom', 'Cashewnut', 'Cashewnut Processed', 'Cashewnut Raw', 'Citrus Fruit', 'Coconut ', 'Cotton(lint)', 'Dry chillies', 'Dry ginger', 'Mango', 'Onion', 'Other Fresh Fruits', 'Papaya', 'Pome Fruit', 'Sannhamp', 'Sugarcane', 'Sweet potato', 'Tomato', 'Tobacco', 'Turmeric']
                          },
                          YADGIR: {
                            Kharif: ['Arhar/Tur', 'Bajra', 'Castor seed', 'Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Horse-gram', 'Jowar', 'Maize', 'Moong(Green Gram)', 'Niger seed', 'Onion', 'Other Kharif pulses', 'Rice', 'Sesamum', 'Small millets', 'Sunflower'],
                            Rabi: ['Bajra', 'Cotton(lint)', 'Cowpea(Lobia)', 'Dry chillies', 'Gram', 'Groundnut', 'Horse-gram', 'Jowar', 'Linseed', 'Maize', 'Moong(Green Gram)', 'Onion', 'Rapeseed &Mustard', 'Rice', 'Safflower', 'Sunflower', 'Urad', 'Wheat'],
                            Summer: ['Bajra', 'Cowpea(Lobia)', 'Dry chillies', 'Groundnut', 'Jowar', 'Maize', 'Onion', 'Rice', 'Sunflower'],
                            WholeYear: ['Coconut', 'Coriander', 'Mesta', 'Sugarcane', 'Sweet potato']
                          } 
                        };

              document.getElementById("season").addEventListener("change", function() {  
              
              const districtDropdown = document.getElementById('district');
              const seasonDropdown = document.getElementById('season');
              const cropDropdown = document.getElementById('crop');

              console.log(districtDropdown);
                console.log(seasonDropdown);
                console.log(cropDropdown);
                
                const selectedDistrict = districtDropdown.value;
                const selectedSeason = seasonDropdown.value;

                // Clear the current crop options
                cropDropdown.innerHTML = '<option value="">Select crop</option>';

                  // If both district and season are selected, add the corresponding crop options to the dropdown
              if (selectedDistrict && selectedSeason) {
                const options = cropOptions[selectedDistrict][selectedSeason];
                for (const option of options) {
                  const optionElement = document.createElement('option');
                  optionElement.value = option; // Set the value to the option text
                  optionElement.text = option;
                  cropDropdown.appendChild(optionElement);
                }
              }
                
              });     
            
            </script>  

                        <div class="form-group row" >
                            <button class="btn btn-primary mx-auto" type="submit" value="Yield" name="Yield_Predict" id="submit">Predict</button>
                        </div>
      </form>

       <div>
            <h4>
                    <?php 
					if(isset($_POST['Yield_Predict'])){

					$state=trim($_POST['state']);
					$district=trim($_POST['district']);
					$season=trim($_POST['Season']);
					$crops=trim($_POST['crops']);
					$area=trim($_POST['area']);


					echo "Predicted crop yield (in Quintal) is: ";

					$Jstate=json_encode($state);
					$Jdistrict=json_encode($district);
					$Jseason=json_encode($season);
					$Jcrops=json_encode($crops);
					$Jarea=json_encode($area);

					$command = escapeshellcmd("python ML/yield_prediction/yield_prediction.py $Jstate $Jdistrict $Jseason $Jcrops $Jarea ");
                    $output = passthru($command);
					echo $output;	
					}
        ?>
					</h4>
        </div>
      </div>

        </body>

    </html>
