const app = new (function () {
    this.tbody = document.getElementById("tbody");
    this.nombres = document.getElementById("nombres");
    this.referencia = document.getElementById("referencia");
    this.precio = document.getElementById("precio");
    this.peso = document.getElementById("peso");
    this.categoria = document.getElementById("categoria");
    this.stock = document.getElementById("stock");
    this.fecha = document.getElementById("fecha");    

    this.listado = () => {
        fetch('../controladores/listado.php')
            .then((res) => res.json())
            .then((data) => {
                this.tbody.innerHTML = "";
                data.forEach((item) => {
                    this.tbody.innerHTML += `
                <tr>
                    <td>${item.id}</td>
                    <td>${item.nombres}</td>
                    <td>${item.referencia}</td>
                    <td>${item.precio}</td>
                    <td>${item.peso}</td>
                    <td>${item.categoria}</td>
                    <td>${item.stock}</td>
                    <td>${item.fecha}</td>
                    <td>
           
            <a href="javascript:;" onclick="editar(${item.id})">Editar</a>
             <a href="javascript:;" onclick="eliminar(${item.id})">Eliminar</a>
             </td>
             </tr>   
                };
            });
        })
        .catch((error)=>console.log(error))
    };
})();

app.listado();
`;
                });
            });
    };
    this.guardar = () =>{
        var form = new FormData();
       form.append("nombres", this.nombres.value);
       form.append("referencia", this.referencia.value);
       form.append("precio", this.precio.value);
       form.append("peso", this.peso.value);
       form.append("categoria", this.categoria.value);
       form.append("stock", this.stock.value);
       form.append("fecha", this.fecha.value); 
       fetch("../controladores/guardar.php",{
        method: "POST",
        body: form,
       })
       .then((rest)=> res.json())
       .then((data)=>{
        console.log(data);
       })
       .catch((error)=>console.log(error));
    };
    this.eliminar = (id) =>{
        var form = new FormData();
        fetch("../controladores/eliminar.php",{
            method: "POST",
            body:form,    
    })
    .then((res)=>res.json())
    .then((data)=>{
        alert("Eliminado");
        this.listado ();
    })

    app.listado();
} 
});

