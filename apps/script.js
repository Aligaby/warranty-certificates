let b2c = document.getElementById('divb2c');
let b2b = document.getElementById('divb2b');
let inputb2c = document.getElementById('b2c');
let inputb2b = document.getElementById('b2b');
inputb2c.addEventListener('input', () => {
    b2c.style.display = 'block';
    b2b.style.display = 'none';
})
inputb2b.addEventListener('input', () => {
    b2c.style.display = 'none';
    b2b.style.display = 'block';
})

const optProduse = () => {
    document.getElementById("catProd").options.length = 0; /* sterge toate options daca aleg un alt producator, pentru a nu apare options ce nu apartin acelui producator */

    const objSuppProdus = {
        cps: ['Cantar', 'Pompa Vid'],
        dixell: ['Controler digital', 'Tablou camera frig'],
		esco: ['Inregistrator temperatura'],
		evco: ['Controler digital'],
        keld: ['Controler digital'],
        rothenberger: ['Cantar', 'Detector pierderi freon', 'Pompa de vid', 'Recuperator freon', 'Trusa de sudura'],
        solerpalau: ['Ventilator baie', 'Ventilator tubulatura'],
        testo: ['Analizor gaze', 'Anemometru', 'Camera termoviziune', 'Data logger', 'Detector pierderi freon', 'Manifold Digital', 'Manometru diferential', 'Multimetru', 'pH-metru', 'Termohigrometru', 'Termometru', 'Vacuumetru'],
        valuetool: ['Cantar', 'Data logger', 'Pompa de vid', 'Recuperator freon'],
        weiguang: ['Ventilator axial'],
		wigam: ['Trusa de sudura'],
    };

    let selSupp = document.getElementById('producator');
    let optSupp = selSupp.options[selSupp.selectedIndex].value.trim();
    let selCatProd = document.getElementById('catProd');

    for (i = 0; i < objSuppProdus[optSupp].length; i++) {
        let opt = document.createElement('option');
        opt.value = objSuppProdus[optSupp][i];
        opt.innerHTML = objSuppProdus[optSupp][i];
        selCatProd.appendChild(opt);
    };
}