var coinNamesObj = {
	crc:"coin",
	ltc:"Litecoin",
	mec:"coin",
	csc:"coin",
	mnc:"Mincoin",
	dgc:"coin",
	nbl:"coin",
	dmd:"coin",
	nec:"coin",
	dvc:"coin",
	nmc:"Namecoin",
	emd:"coin",
	nrb:"coin",
	alf:"coin",
	frc:"coin",
	nvc:"Novacoin",
	anc:"coin",
	frk:"coin",
	phs:"coin",
	asc:"coin",
	fst:"coin",
	ppc:"Peercoin (was: PPcoin)",
	bqc:"BBQcoin",
	ftc:"Feathercoin",
	pxc:"coin",
	btb:"coin",
	gdc:"coin",
	sbc:"coin",
	btc:"Bitcoin",
	glc:"coin",
	spt:"coin",
	bte:"coin",
	gld:"Goldcoin",
	tag:"coin",
	btg:"coin",
	glx:"coin",
	tek:"coin",
	buk:"coin",
	hbn:"coin",
	trc:"coin",
	cap:"Bottlecaps",
	ifc:"Infinicoin",
	wdc:"coin",
	cgb:"coin",
	ixc:"coin",
	xjo:"coin",
	cmc:"coin",
	kgc:"coin",
	zet:"Zetacoin",
	cnc:"CNCcoin",
	lky:"coin"
}

var coinNamesArr = [];
for (var coinCode in coinNamesObj){
	coinNamesArr.push([coinCode, coinNamesObj[coinCode]]);
}
coinNamesArr.sort(function(a, b) {
	if(a[1] < b[1]) return -1;
    if(a[1] > b[1]) return 1;
    return 0;
}); //Sort by second item (Coin name)
