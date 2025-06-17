<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lead Ore – High-Grade Export Material</title>
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
      <strong><?php echo $title?></strong> is a reliable supplier of high-quality Lead Ore (Galena), sourced directly from licensed mines. Our Lead Ore is available in bulk quantities for smelting and metallurgical processing across various global industries.
    </p>

    <h2>Technical Specifications</h2>
    <ul>
      <li><strong>Chemical Formula:</strong> PbS (Galena)</li>
      <li><strong>Lead (Pb) Content:</strong> 45% – 75%</li>
      <li><strong>Form:</strong> Raw ore, crushed lumps, or fine powder</li>
      <li><strong>Appearance:</strong> Metallic gray to dull silver-black</li>
      <li><strong>Density:</strong> Approx. 7.5 g/cm³</li>
      <li><strong>Moisture Content:</strong> < 5%</li>
      <li><strong>Impurities:</strong> Zn, Fe, S (tested and controlled)</li>
      <li><strong>Packaging:</strong> 50 kg sacks or 1-ton jumbo bags</li>
    </ul>

    <h2>Applications</h2>
    <p>Lead Ore is widely used in the following industries:</p>
    <ul>
      <li><strong>Battery Manufacturing:</strong> Primary raw material for automotive and inverter batteries</li>
      <li><strong>Radiation Shielding:</strong> Used in medical, nuclear, and construction shielding solutions</li>
      <li><strong>Ammunition:</strong> For the production of bullets and projectiles</li>
      <li><strong>Alloy Production:</strong> Combines with other metals for durability and corrosion resistance</li>
      <li><strong>Ceramics and Pigments:</strong> As a stabilizer and colorant</li>
    </ul>

    <h2>Quality & Compliance</h2>
    <p>
      Each batch is accompanied by an assay report showing Lead content and trace elements. We comply with international export standards and offer third-party inspection services upon request.
    </p>

    <h2>Export & Logistics</h2>
    <ul>
      <li><strong>Minimum Order:</strong> 25 Metric Tons</li>
      <li><strong>Shipment Terms:</strong> FOB / CIF / Ex-Works</li>
      <li><strong>Documentation:</strong> Certificate of Origin, Mineral Assay, Export Permit</li>
      <li><strong>Delivery:</strong> Via sea freight from approved export terminals</li>
    </ul>

    <div class="contact">
      <h2>Contact Us for Lead Ore Exports</h2>
      <p>
        We welcome inquiries from smelters, refineries, and commodity buyers. Get in touch for current pricing, product samples, or technical specifications.
      </p>
      <p>
        📧 <strong>Email:</strong> <?php echo $data['contact'][0]['email']?><br>
        📞 <strong>Phone:</strong> <?php echo $data['contact'][0]['phone']?><br>
      </p>
    </div>
  </div>
</body>
</html>
