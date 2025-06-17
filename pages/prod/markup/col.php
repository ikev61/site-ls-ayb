<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Columbite – Niobium-Tantalum Ore Export</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    #prod-container.container {
      max-width: 960px;
      margin: auto;
      padding: 20px;
    }
    #prod-container>h1, #prod-container>h2 {
      color: #b29600;
    }
    #prod-container>h2{
      margin: 20px 0;
    }
    #prod-container>ul {
      margin-left: 20px;
      list-style-type:disc;
    }
    #prod-container>.contact {
      margin-top: 40px;
      background: #f8f8f8;
      padding: 15px;
      border-left: 5px solid #b29600;
    }
    #prod-container>p{
      line-height: 1.8;
    }
  </style>
</head>
<body>
  <div class="container" id="prod-container">
    <h2>Overview</h2>
    <p>
      <strong><?php echo $title?></strong> specializes in the mining, processing, and export of high-grade Columbite – a strategic ore rich in niobium (Nb) and often containing tantalum (Ta). Our columbite is sourced from ethically operated mining sites and supplied to industries involved in electronics, aerospace, and alloy manufacturing.
    </p>

    <h2>Product Description</h2>
    <ul>
      <li><strong>Product Name:</strong> Columbite (FeNb<sub>2</sub>O<sub>6</sub>)</li>
      <li><strong>Typical Niobium (Nb₂O₅) Content:</strong> 35% – 55%</li>
      <li><strong>Tantalum (Ta₂O₅):</strong> May be present in varying traces (5% – 20%)</li>
      <li><strong>Form:</strong> Mineral concentrate / raw ore</li>
      <li><strong>Color:</strong> Black to brownish-black, submetallic to metallic luster</li>
      <li><strong>Density:</strong> High specific gravity (5.2–7.0 g/cm³)</li>
      <li><strong>Packaging:</strong> 50 kg sacks or 1MT bulk bags</li>
      <li><strong>Documentation:</strong> Mineral assay, export license, certificate of origin</li>
    </ul>

    <h2>Industrial Applications</h2>
    <p>Columbite is critical in:</p>
    <ul>
      <li><strong>Alloy Production:</strong> Used in high-strength steel and superalloys for turbines and engines</li>
      <li><strong>Capacitors & Electronics:</strong> Niobium-tantalum oxides are essential in capacitor manufacturing</li>
      <li><strong>Aerospace & Defense:</strong> Structural materials requiring high thermal and corrosion resistance</li>
      <li><strong>Nuclear Technology:</strong> Niobium is used in nuclear reactor components</li>
    </ul>

    <h2>Quality & Processing</h2>
    <p>
      We employ mechanical separation, magnetic sorting, and gravity concentration to extract high-grade columbite from mined ore. Each shipment is tested by ISO-accredited labs to confirm Nb₂O₅ and Ta₂O₅ content. Moisture content and trace impurities are controlled to meet international specifications.
    </p>

    <h2>Why Choose Our Columbite?</h2>
    <ul>
      <li><strong>High Niobium Purity:</strong> Export-grade concentrates above 40% Nb₂O₅</li>
      <li><strong>Certified Origin:</strong> Sourced from regulated and traceable mining operations</li>
      <li><strong>Custom Orders:</strong> Tailored particle size and composition per client needs</li>
      <li><strong>Reliable Supply Chain:</strong> Capacity for monthly exports in bulk</li>
    </ul>

    <div class="contact">
      <h2>Contact Us for Columbite Export</h2>
      <p>
        We are actively seeking partnerships with metallurgical industries, capacitor manufacturers, and critical material traders. For technical data sheets (TDS), pricing, and order inquiries, please reach out to our sales department.
      </p>
      <p>
      📧 <strong>Email:</strong> <?php echo $data['contact'][0]['email']?><br>
      📞 <strong>Phone:</strong> <?php echo $data['contact'][0]['phone']?><br>
      </p>
    </div>
  </div>
</body>
</html>
