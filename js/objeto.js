var hotel = {
    nome: 'Sunshine Hotel Park',
    totalQuartos: 100,
    reservados: 30,

    disponibilidade: function () {
        return this.totalQuartos - this.reservados;
    },
    Reservados: function () {
        return reservados--;
    }
}
var quartos = document.getElementById('totalQuartos');
quartos.textContent = hotel.totalQuartos;

var reserva = document.getElementById('reservados');
reserva.textContent = hotel.reservados;

var nome = document.getElementById('hotel');
nome.textContent = hotel.nome;

/*var nomeMes = ['jan', 'fev', 'mar', 'abr', 'mai', 'jun'];
nomeMes.textContent = d.nomeMes;*/

