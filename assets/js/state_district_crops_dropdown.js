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
