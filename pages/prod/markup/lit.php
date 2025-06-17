<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lithium Ore – Strategic Energy Mineral</title>
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
      <strong><?php echo $title?></strong> is a supplier of high-grade Lithium Ore extracted from certified spodumene deposits. Lithium is a critical resource in clean energy, battery technology, and modern electronics. We provide consistent quality material for processing into lithium hydroxide and lithium carbonate.
    </p>

    <h2>Technical Specifications</h2>
    <ul>
      <li><strong>Chemical Formula:</strong> LiAl(SiO₃)₂</li>
      <li><strong>Lithium Oxide (Li₂O) Content:</strong> 3% – 6%</li>
      <li><strong>Form:</strong> Spodumene ore, raw or crushed</li>
      <li><strong>Color:</strong> Grey, pale green, or pink</li>
      <li><strong>Moisture Content:</strong> ≤ 1%</li>
      <li><strong>Hardness:</strong> 6.5 – 7.0 on Mohs scale</li>
      <li><strong>Packaging:</strong> Bulk, 50 kg bags, or 1MT jumbo bags</li>
    </ul>

    <h2>Applications</h2>
    <ul>
      <li><strong>Electric Vehicle (EV) Batteries:</strong> Key material in lithium-ion battery cells</li>
      <li><strong>Renewable Energy Storage:</strong> Used in solar and wind energy battery packs</li>
      <li><strong>Consumer Electronics:</strong> Phones, laptops, power tools</li>
      <li><strong>Ceramics & Glass:</strong> Improves strength and heat resistance</li>
      <li><strong>Aerospace Alloys:</strong> For lightweight, high-strength metals</li>
    </ul>

    <h2>Quality & Testing</h2>
    <p>
      Each shipment is lab-tested to determine lithium content and trace impurities. We provide complete assay reports and third-party validation on request to meet industrial and regulatory standards.
    </p>

    <h2>Export & Logistics</h2>
    <ul>
      <li><strong>Minimum Order:</strong> 20 Metric Tons</li>
      <li><strong>Supply Capability:</strong> 1,000 MT/month</li>
      <li><strong>Shipping Terms:</strong> FOB / CIF / Ex-Works</li>
      <li><strong>Export Ports:</strong> Shipped from certified mineral export terminals</li>
      <li><strong>Documents Provided:</strong> Certificate of Origin, Assay Report, Export License</li>
    </ul>

    <div class="contact">
      <h2>Contact Us for Lithium Ore Supply</h2>
      <p>
        Looking for reliable Lithium Ore exports? Contact our sales team for specifications, MSDS, sample availability, and quotation.
      </p>
      <p>
        📧 <strong>Email:</strong> <?php echo $data['contact'][0]['email']?><br>
        📞 <strong>Phone:</strong> <?php echo $data['contact'][0]['phone']?><br>
      </p>
    </div>
  </div>
</body>
</html>
