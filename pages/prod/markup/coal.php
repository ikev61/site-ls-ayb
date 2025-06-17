<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Coal – Premium Grade Export Fuel</title>
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
      <strong><?php echo $title?></strong> offers high-grade coal sourced from premium mines in Nigeria and neighboring regions. We supply both thermal coal for energy generation and metallurgical coal for steel production. Our coal is screened, graded, and ready for export to international clients across industries.
    </p>

    <h2>Product Types</h2>
    <ul>
      <li><strong>Thermal Coal:</strong> For power plants and industrial boilers</li>
      <li><strong>Metallurgical (Coking) Coal:</strong> For iron and steel production</li>
    </ul>

    <h2>Typical Specifications</h2>
    <ul>
      <li><strong>Fixed Carbon:</strong> 50% – 70%</li>
      <li><strong>Calorific Value:</strong> 5,000 – 6,800 kcal/kg (GCV)</li>
      <li><strong>Volatile Matter:</strong> 20% – 35%</li>
      <li><strong>Moisture Content:</strong> 6% – 15%</li>
      <li><strong>Ash Content:</strong> 10% – 20%</li>
      <li><strong>Size:</strong> 0–50 mm (custom sizing available)</li>
      <li><strong>Packaging:</strong> Bulk or 50 kg/1MT bags on request</li>
    </ul>

    <h2>Applications</h2>
    <ul>
      <li><strong>Power Generation:</strong> Coal-fired power plants and industrial turbines</li>
      <li><strong>Steel Industry:</strong> Coking coal for blast furnaces</li>
      <li><strong>Cement Kilns:</strong> Fuel for clinker production</li>
      <li><strong>Brick & Tile Manufacturing:</strong> High-temperature heating</li>
      <li><strong>Domestic Use:</strong> Industrial heating and small-scale energy</li>
    </ul>

    <h2>Export & Logistics</h2>
    <ul>
      <li><strong>Minimum Order:</strong> 100 Metric Tons</li>
      <li><strong>Export Terms:</strong> FOB / CIF / Ex-Works</li>
      <li><strong>Supply Capacity:</strong> 10,000 MT/month</li>
      <li><strong>Ports:</strong> Apapa, Onne, Warri, or Tin Can Island</li>
      <li><strong>Documents Provided:</strong> Certificate of Origin, Coal Quality Report, Export License</li>
    </ul>

    <h2>Quality Assurance</h2>
    <p>
      All coal is sampled and tested in certified labs before shipment. We offer SGS, Bureau Veritas, or third-party analysis reports based on client requirements.
    </p>

    <div class="contact">
      <h2>Contact Us for Bulk Coal Supply</h2>
      <p>
        Need a reliable coal supplier? Contact our sales team for pricing, test reports, or logistics support. We’re ready to supply thermal and coking coal to meet your energy and industrial needs.
      </p>
      <p>
        📧 <strong>Email:</strong> <?php echo $data['contact'][0]['email']?><br>
        📞 <strong>Phone:</strong> <?php echo $data['contact'][0]['phone']?><br>
      </p>
    </div>
  </div>
</body>
</html>
