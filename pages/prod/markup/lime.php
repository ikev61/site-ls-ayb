<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Limestone – Industrial Grade Export</title>
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
      <strong><?php echo $title?></strong> supplies premium-grade Limestone suitable for industrial, construction, and agricultural use. Our Limestone is sourced from verified deposits and processed to meet the specific requirements of various industries.
    </p>

    <h2>Product Specifications</h2>
    <ul>
      <li><strong>Chemical Composition:</strong> Calcium Carbonate (CaCO₃) – 90% to 98%</li>
      <li><strong>Form:</strong> Lumps, crushed stone, or powder</li>
      <li><strong>Appearance:</strong> White to off-white</li>
      <li><strong>Moisture Content:</strong> ≤ 1%</li>
      <li><strong>Hardness:</strong> 3 on Mohs scale</li>
      <li><strong>Size Options:</strong> 0–5mm, 5–25mm, or as per customer request</li>
      <li><strong>Packaging:</strong> Bulk, 50 kg bags, or 1-ton jumbo bags</li>
    </ul>

    <h2>Industrial Applications</h2>
    <ul>
      <li><strong>Cement Manufacturing:</strong> Primary raw material for Portland cement</li>
      <li><strong>Construction:</strong> Used as aggregate and base material</li>
      <li><strong>Steel Industry:</strong> Acts as a flux during smelting</li>
      <li><strong>Water Treatment:</strong> Used for pH control and purification</li>
      <li><strong>Fertilizers:</strong> Improves soil structure and reduces acidity</li>
      <li><strong>Chemical Industry:</strong> Raw material for lime and precipitated calcium carbonate</li>
    </ul>

    <h2>Quality Assurance</h2>
    <p>
      Our Limestone undergoes thorough testing to meet industrial purity standards. We provide third-party laboratory reports and offer consistency in size and composition across all shipments.
    </p>

    <h2>Export & Delivery Terms</h2>
    <ul>
      <li><strong>Minimum Order:</strong> 25 Metric Tons</li>
      <li><strong>Shipping:</strong> FOB / CIF / Ex-Works from certified terminals</li>
      <li><strong>Documents Provided:</strong> Certificate of Origin, Packing List, Export License, Assay Report</li>
      <li><strong>Supply Capacity:</strong> Up to 10,000 MT/month</li>
    </ul>

    <div class="contact">
      <h2>Contact Us for Limestone Orders</h2>
      <p>
        Partner with us for bulk, high-purity Limestone for your industrial, construction, or agricultural needs. Reach out for samples, pricing, and delivery timelines.
      </p>
      <p>
        📧 <strong>Email:</strong> <?php echo $data['contact'][0]['email']?><br>
        📞 <strong>Phone:</strong> <?php echo $data['contact'][0]['phone']?><br>
      </p>
    </div>
  </div>
</body>
</html>
