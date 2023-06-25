const settings = {
	async: true,
	crossDomain: true,
	url: 'https://apidojo-yahoo-finance-v1.p.rapidapi.com/stock/v2/get-summary?symbol=NHPC.NS&region=IN',
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '798fc30723msh5168c91e48371f2p14bedbjsn2135ef823872',
		'X-RapidAPI-Host': 'apidojo-yahoo-finance-v1.p.rapidapi.com'
	}
};

$.ajax(settings).done(function (response) {
    console.log(response.price.regularMarketPrice.raw);
	console.log(response);
    const x = document.getElementById("testdata");
    x.innerHTML = response.price.regularMarketPrice.raw;
});
