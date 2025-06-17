<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gold – Our Premium Product</title>
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
    At <strong><?php echo $title?></strong>, gold is at the core of our business and a symbol of the excellence we strive to deliver.
    As a leading company in the mining, import, and export of precious metals, we offer high-grade gold sourced from ethically operated
    mines and refined to meet international standards. Our commitment to quality, transparency, and sustainability sets us apart in the global gold market.
  </p>

  <h2>Product Description</h2>
  <ul>
    <li><strong>Name:</strong> Gold</li>
    <li><strong>Purity:</strong> 22 Karat (91.6%) and 24 Karat (99.99%)</li>
    <li><strong>Form:</strong> Bullion Bars, Nuggets, Dust, and Dore Bars</li>
    <li><strong>Certification:</strong> Assay-certified with complete documentation</li>
  </ul>

  <h2>Mining and Ethical Sourcing</h2>
  <p>
    We source our gold directly from our own mines and through partnerships with responsible artisanal and small-scale miners.
    Our mining operations adhere to global best practices in environmental sustainability, labor rights, and community development.
    Each ounce of gold is traced from its source to ensure it meets our ethical and environmental standards.
  </p>

  <h2>Quality Assurance</h2>
  <p>
    Our gold is refined and processed under strict quality control measures. Using advanced techniques such as fire assay and
    X-ray fluorescence (XRF), we guarantee high purity and authenticity. Every shipment undergoes third-party verification before export.
  </p>

  <h2>Available Forms and Quantities</h2>
  <p>We supply gold in various formats to meet diverse client needs:</p>
  <ul>
    <li><strong>Gold Bullion Bars:</strong> 1 kg to 12.5 kg (400 oz)</li>
    <li><strong>Gold Nuggets and Dust:</strong> For jewelers and collectors</li>
    <li><strong>Dore Bars:</strong> Semi-pure bars for industrial processing</li>
    <li><strong>Custom Orders:</strong> Quantities tailored for commercial buyers</li>
  </ul>

  <h2>Global Trade and Export</h2>
  <p>
    We export gold worldwide with robust logistics and compliance protocols. Our operations comply with all applicable laws, including
    international trade regulations, AML (Anti-Money Laundering) standards, and the Kimberley Process.
  </p>

  <h2>Industries We Serve</h2>
  <ul>
    <li>Precious Metals Investment Firms</li>
    <li>Jewelry Manufacturers</li>
    <li>Refineries</li>
    <li>Central Banks and Financial Institutions</li>
    <li>Industrial and Technology Firms</li>
  </ul>

  <h2>Why Choose Us?</h2>
  <ul>
    <li><strong>Reliable Supply Chain:</strong> End-to-end assurance from mine to market</li>
    <li><strong>Transparency & Trust:</strong> All products come with full documentation and certification</li>
    <li><strong>Competitive Pricing:</strong> Market-based pricing and volume discounts</li>
    <li><strong>Sustainability Focused:</strong> Environmentally friendly operations and local community support</li>
  </ul>

  <div class="contact">
    <h2>Contact Us for Gold Purchase or Partnership</h2>
    <p>
      Whether you are a refiner, wholesaler, investor, or government entity, we welcome your inquiries.
      Reach out to our export team for bulk supply, partnership opportunities, or to request a quote.
    </p>
    <p>
      📧 <strong>Email:</strong> <?php echo $data['contact'][0]['email']?><br>
      📞 <strong>Phone:</strong> <?php echo $data['contact'][0]['phone']?><br>
    </p>
  </div>
</div>

</body>
</html>