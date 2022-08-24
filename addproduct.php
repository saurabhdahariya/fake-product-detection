<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QR code</title>
    <!-- StyleSheet -->
    <link rel="stylesheet" href="style1.css" />
    <script src="./node_modules/web3/dist/web3.min.js"></script>
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/b6b9586b26.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
  
    <div id="container">
      <div id="left">
        <div id="in">
          <p>qr code generator</p>
          <input
            type="text"
            name=""
            id="text"
            placeholder="Product Name"
            required
          />
          
      
          <button onclick="qr()">
            <i class="fa fa-qrcode" aria-hidden="true"></i>
            Generator QR Code
          </button>
        </div>
      </div>
      <div id="right">
        <div id="image">
          <img
            src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=neogorithm"
            alt=""
          />
        </div>
      </div>
    </div>

    <!-- Script JS -->
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <script>
      if(type of web3 !== 'undefined'){
        web3 = new Web3(web3.currentProvider);

      }else{
        web3 = new Web3(new Web3.providers.HttpProvider("HTTP://127.0.0.1:7545"));
      }

      web3.eth.defaultAccount = web3.eth.accounts[0];

      var CoursetroContract = web3.eth.contract([
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"internalType": "uint256",
				"name": "index",
				"type": "uint256"
			}
		],
		"name": "Added",
		"type": "event"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_productId",
				"type": "uint256"
			},
			{
				"internalType": "string",
				"name": "info",
				"type": "string"
			}
		],
		"name": "addState",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "_a",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_b",
				"type": "string"
			}
		],
		"name": "concat",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "pure",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "_text",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_date",
				"type": "string"
			}
		],
		"name": "newItem",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "products",
		"outputs": [
			{
				"internalType": "address",
				"name": "creator",
				"type": "address"
			},
			{
				"internalType": "string",
				"name": "productName",
				"type": "string"
			},
			{
				"internalType": "uint256",
				"name": "productId",
				"type": "uint256"
			},
			{
				"internalType": "string",
				"name": "date",
				"type": "string"
			},
			{
				"internalType": "uint256",
				"name": "totalStates",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_productId",
				"type": "uint256"
			}
		],
		"name": "searchProduct",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	}
]);

  var Coursetro = CoursetroContract.at('0x3BECf7DF8430136349787F68daDEC3E2551D3786');
  console.log(Coursetro);



    </script>
  </body>
</html>