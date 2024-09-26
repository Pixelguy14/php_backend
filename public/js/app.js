document.addEventListener('DOMContentLoaded',()=>{
    loadUsers()
})

const loadUsers = () => {
    fetch('./public/usuarios.php')
    .then((res)=>res.json())
    .then((data)=>{
        const tbody = document.querySelector('#tablaUsuarios tbody')
        tbody.innerHTML = ''
        data.forEach((usuario)=>{
            const row = document.createElement('tr')
            row.innerHTML = 
            `
            <td>${usuario.id}</td>
            <td>${usuario.nombre}</td>
            <td>${usuario.apaterno}</td>
            <td>${usuario.amaterno}</td>
            <td>${usuario.direccion}</td>
            <td>${usuario.telefono}</td>
            <td>${usuario.ciudad}</td>
            <td>${usuario.usuario}</td>
            <td>${usuario.rol}</td>
            `
            tbody.appendChild(row)
        })
    })
    .catch((error)=>{
        console.log('error en loadUsers: ',error)
    })
}
