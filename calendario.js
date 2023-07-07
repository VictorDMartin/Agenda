// Obter a data atual
var today = new Date();

// Exibir o mês atual e o ano
var month = today.getMonth();
var year = today.getFullYear();
document.write("<h2>" + month + "/" + year + "</h2>");

// Obter o número de dias no mês atual
var daysInMonth = new Date(year, month + 1, 0).getDate();

// Exibir os dias do mês em uma tabela
document.write("<table>");

// Cabeçalho da tabela com os dias da semana
document.write("<tr><th>Dom</th><th>Seg</th><th>Ter</th><th>Qua</th><th>Qui</th><th>Sex</th><th>Sáb</th></tr>");

// Variáveis para rastrear o dia da semana e o número do dia
var currentDay = 1;
var currentWeekday = new Date(year, month, currentDay).getDay();
document.write("<tr>");

// Preencher os espaços em branco no início do mês
for (var i = 0; i < currentWeekday; i++) {
  document.write("<td></td>");
}

// Preencher os dias do mês
while (currentDay <= daysInMonth) {
  // Inserir o número do dia na célula da tabela
  document.write("<td>" + currentDay + "</td>");

  // Avançar para o próximo dia e atualizar o dia da semana
  currentDay++;
  currentWeekday++;

  // Se chegarmos ao final da semana, iniciar uma nova linha na tabela
  if (currentWeekday > 6) {
    document.write("</tr><tr>");
    currentWeekday = 0;
  }
}

// Preencher os espaços em branco no final do mês
if (currentWeekday != 0) {
  for (var i = currentWeekday; i < 7; i++) {
    document.write("<td></td>");
  }
}

document.write(today);
document.write("</tr>");
document.write("</table>");

