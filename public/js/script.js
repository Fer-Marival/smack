new Vue({
	el: '#appProducts',
	data: {

		name: '';
	},
	methods: {
		AgregarProducto: function (item){

			console.log(this.item);

			/*listProduct: this.listProduct[item];
			console.log(this.listProduct);

			//console.log(item);
			/*var producto = this.product.trim();
			if (producto){
				this.list.push({
					atr:item,
					checked:false
				});
			}
			alert("Producto Agregado");
			console.log(this.list);*/
		}
	}
});