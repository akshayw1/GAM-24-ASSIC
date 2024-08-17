document.getElementById("numPeople").addEventListener("input", calculateCost);
document
  .getElementById("numChildrenUnder5")
  .addEventListener("input", calculateCost);

function calculateCost() {
  let numPeople = parseInt(document.getElementById("numPeople").value) || 0;
  let numChildrenUnder5 =
    parseInt(document.getElementById("numChildrenUnder5").value) || 0;

  let totalPeople = numPeople - numChildrenUnder5;
  let cost = totalPeople * 1000;

  if (cost < 0) {
    cost = 0;
  }

  document.getElementById("cost").innerText = "Total Cost: ₹" + cost;
}

function redirectToPayment() {
  window.location.href = "https://alumni.iiita.ac.in";
}
