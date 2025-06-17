<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Titanium Dioxide – Industrial Mineral Export</title>
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
      <strong><?php echo $title?></strong> is a reputable supplier of high-grade Iron Ore, a vital raw material for global steel manufacturing. We extract and export iron ore from certified deposits with substantial reserves, offering consistent quality and reliable volume to meet international demand.
    </p>

    <h2>Product Description</h2>
    <ul>
      <li><strong>Product Name:</strong> Iron Ore</li>
      <li><strong>Iron Content (Fe):</strong> 58% – 65%</li>
      <li><strong>Forms:</strong> Lumps (10–40mm), Fines (<10mm), Concentrate</li>
      <li><strong>Color:</strong> Reddish-brown, dark grey, or black</li>
      <li><strong>Packaging:</strong> Bulk shipments via containers, railcars, or barges</li>
      <li><strong>Certification:</strong> SGS report, mineral assay, and export license</li>
    </ul>

    <h2>Applications</h2>
    <p>Iron Ore is a core material for:</p>
    <ul>
      <li><strong>Steel Production:</strong> Primary source of iron in blast furnace and DRI processes</li>
      <li><strong>Construction Industry:</strong> Steel reinforcement for buildings, bridges, and infrastructure</li>
      <li><strong>Automotive Manufacturing:</strong> Production of chassis, engines, and car body frames</li>
      <li><strong>Machinery and Tools:</strong> Raw material for industrial machinery and engineering tools</li>
    </ul>

    <h2>Grades We Offer</h2>
    <ul>
      <li><strong>58% Fe Fines:</strong> Suitable for cement and blending</li>
      <li><strong>62% Fe Lumps:</strong> Ideal for sinter plants and direct reduction</li>
      <li><strong>65%+ Fe Concentrate:</strong> High-grade material for pelletizing and steelmaking</li>
    </ul>

    <h2>Processing & Quality Control</h2>
    <p>
      Our Iron Ore undergoes crushing, screening, and magnetic separation to meet strict client specifications. Each shipment is tested by internationally recognized laboratories to certify Fe content, moisture, and impurity levels (SiO₂, Al₂O₃, S, P).
    </p>

    <h2>Why Choose Us?</h2>
    <ul>
      <li><strong>Consistent Quality:</strong> Guaranteed Fe grade and low impurities</li>
      <li><strong>Bulk Export Capability:</strong> Up to 50,000 MT per month</li>
      <li><strong>Flexible Delivery:</strong> FOB, CIF, or Ex-Works options available</li>
      <li><strong>Compliant Sourcing:</strong> From licensed and regulated mining sites</li>
    </ul>

    <div class="contact">
      <h2>Contact Us for Iron Ore Supply</h2>
      <p>
        Are you a steel mill, foundry, or bulk raw material importer? Partner with us for long-term supply of high-grade Iron Ore. Reach out to our export desk to request specifications, pricing, and availability.
      </p>
      <p>
        📧 <strong>Email:</strong> <?php echo $data['contact'][0]['email']?><br>
        📞 <strong>Phone:</strong> <?php echo $data['contact'][0]['phone']?><br>
      </p>
    </div>
</body>
</html>
