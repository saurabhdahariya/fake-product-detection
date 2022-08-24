function qr() {
    var t = document.getElementById("text").value;
    // var t = document.getElementById("productid").value;
    // var t = document.getElementById("price").value;
    document.getElementById(
      "image"
    ).innerHTML = `<img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=${t}"></img>`;
  }