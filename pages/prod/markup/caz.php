<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cassiterite (Tin Ore) – Strategic Mineral Export</title>
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
      <strong><?php echo $title?></strong> is a leading supplier of high-grade Cassiterite, the primary ore of tin (Sn). We mine, process, and export quality tin-bearing ore sourced from secure and environmentally responsible deposits in [insert origin, e.g., Nigeria, DR Congo, or Rwanda]. Our Cassiterite is essential for global industries ranging from electronics to automotive manufacturing.
    </p>

    <h2>Product Description</h2>
    <ul>
      <li><strong>Product Name:</strong> Cassiterite (SnO<sub>2</sub>)</li>
      <li><strong>Grade:</strong> 60% – 78% Tin (Sn) content</li>
      <li><strong>Form:</strong> Concentrate / Raw Mineral Sand</li>
      <li><strong>Color:</strong> Brown to black with metallic to sub-metallic luster</li>
      <li><strong>Density:</strong> High specific gravity (6.8–7.1 g/cm³)</li>
      <li><strong>Packaging:</strong> Bulk sacks (1MT), 50kg bags, or containerized shipments</li>
      <li><strong>Certification:</strong> Full mineral assay and export documentation</li>
    </ul>

    <h2>Industrial Applications</h2>
    <p>
      Cassiterite is the most significant source of refined tin, used in:
    </p>
    <ul>
      <li><strong>Electronics:</strong> Soldering material for circuit boards and semiconductors</li>
      <li><strong>Automotive:</strong> Tin alloys and bearing metals</li>
      <li><strong>Packaging:</strong> Tinplate for food-safe metal containers</li>
      <li><strong>Glass Industry:</strong> Used in the production of float glass as a polishing agent</li>
      <li><strong>Alloys:</strong> Component in bronze and other tin-based alloys</li>
    </ul>

    <h2>Processing & Quality</h2>
    <p>
      Our Cassiterite undergoes mechanical and gravity separation processes to ensure high tin concentration. Each shipment is subject to strict quality control with XRF and ICP-OES laboratory analysis. We ensure compliance with international standards including the OECD Due Diligence Guidance for Conflict Minerals.
    </p>

    <h2>Environmental and Ethical Sourcing</h2>
    <p>
      We are committed to sustainable mining. Our operations prioritize safe labor practices, minimal ecological disruption, and responsible waste management. We only partner with legally certified artisanal and industrial mines that align with our ethical and transparency policies.
    </p>

    <h2>Why Partner with Us?</h2>
    <ul>
      <li><strong>Consistent Quality:</strong> Export-grade Cassiterite with verified tin content</li>
      <li><strong>Global Delivery:</strong> Logistics solutions for Europe, Asia, and the Americas</li>
      <li><strong>Flexible Supply:</strong> Small batches to bulk contracts available</li>
      <li><strong>Secure Documentation:</strong> Export licenses, analysis certificates, and traceability reports</li>
    </ul>

    <div class="contact">
      <h2>Contact Us for Cassiterite Sales & Partnership</h2>
      <p>
        We welcome inquiries from smelters, foundries, electronic manufacturers, and strategic commodity traders. For quotes, specifications, or custom supply agreements, get in touch with our sales team.
      </p>
      <p>
      📧 <strong>Email:</strong> <?php echo $data['contact'][0]['email']?><br>
      📞 <strong>Phone:</strong> <?php echo $data['contact'][0]['phone']?><br>
      </p>
    </div>
  </div>
</body>
</html>
