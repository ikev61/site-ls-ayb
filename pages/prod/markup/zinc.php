<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Zinc Ore – High-Quality Export Material</title>
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
      <strong><?php echo $title?></strong> is a trusted supplier of high-quality Zinc Ore for clients in the metal smelting, galvanizing, and alloy industries. Our Zinc Ore is rich in zinc content, ethically sourced, and available in large quantities for global export.
    </p>

    <h2>Product Specifications</h2>
    <ul>
      <li><strong>Chemical Formula:</strong> ZnS (Sphalerite)</li>
      <li><strong>Zinc (Zn) Content:</strong> 30% – 55%</li>
      <li><strong>Form:</strong> Raw ore, crushed rock, or fine concentrate</li>
      <li><strong>Appearance:</strong> Reddish-brown, yellow to gray crystals</li>
      <li><strong>Moisture Content:</strong> Less than 5%</li>
      <li><strong>Typical Impurities:</strong> Pb, Fe, Cd (within export limits)</li>
      <li><strong>Density:</strong> 3.9 – 4.1 g/cm³</li>
      <li><strong>Packaging:</strong> 50 kg bags, 1MT jumbo bags, or bulk loads</li>
    </ul>

    <h2>Industrial Applications</h2>
    <ul>
      <li><strong>Galvanization:</strong> Protecting steel from rust and corrosion</li>
      <li><strong>Alloy Production:</strong> Used in manufacturing brass and zinc-aluminum alloys</li>
      <li><strong>Die Casting:</strong> Precision components in the automotive and electronics industries</li>
      <li><strong>Chemical Industry:</strong> Source material for zinc oxide and zinc sulfate production</li>
      <li><strong>Pharmaceuticals and Cosmetics:</strong> Used in formulations like calamine lotion and sunblock</li>
    </ul>

    <h2>Quality Control & Testing</h2>
    <p>
      All shipments undergo thorough testing for metal content and impurities. We provide third-party assay reports (SGS or equivalent) to ensure compliance with buyer requirements. Samples can be provided upon request.
    </p>

    <h2>Export Information</h2>
    <ul>
      <li><strong>Minimum Order Quantity (MOQ):</strong> 25 Metric Tons</li>
      <li><strong>Supply Ability:</strong> 1,000 – 5,000 MT/month</li>
      <li><strong>Delivery Terms:</strong> FOB / CIF / Ex-Works</li>
      <li><strong>Shipping:</strong> Via sea from certified export terminals</li>
      <li><strong>Documentation:</strong> Certificate of Origin, Mineral Assay Report, Export License</li>
    </ul>

    <div class="contact">
      <h2>Contact Us for Zinc Ore Exports</h2>
      <p>
        Are you looking for a consistent supplier of high-grade Zinc Ore? Get in touch with our team for quotations, technical sheets, and shipping schedules.
      </p>
      <p>
        📧 <strong>Email:</strong> <?php echo $data['contact'][0]['email']?><br>
        📞 <strong>Phone:</strong> <?php echo $data['contact'][0]['phone']?><br>
      </p>
    </div>
  </div>
</body>
</html>
