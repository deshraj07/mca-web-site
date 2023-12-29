// Replace this with your desired text or data
const dataToEncode = "https://youtube.com/";

// Get the element where you want to render the QR code
const qrCodeContainer = document.getElementById("qrcode");

// Create a QRCode instance
const qrcode = new QRCode(qrCodeContainer, {
  text: dataToEncode,
  width: 128,
  height: 128
});

// Optionally, you can customize the QR code further
// For example, you can set the color of the QR code
qrcode._el.firstChild.setAttribute("fill", "#000000");