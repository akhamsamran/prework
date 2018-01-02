
const getUserChoice = userInput => {
	let userInput = userInput.toLowerCase();
	if (userInput === 'rock' || userInput === 'paper' || userInput === 'scissors') {
		return userInput;
	}else {
		return 'error!';
	}
}


let getComputerChoice= Math.floor(Math.random)*2;

switch (randomNumber) {
	case 0:
		return 'rock';
	case 1:
		return 'paper';
	case 2:
		return 'scissors';
}
determineWinner = (userChoice, computerChoice) => {
	if (userChoice = computerChoice) {
		return 'tie';
	} else if ((userChoice === 'rock' && computerChoice === 'scissors') || (userChoice === 'paper' && computerChoice === 'rock') ||(userChoice ==='scissors' && computerChoice ==="paper")) {
		return 'You won!';
	} else {
		return 'you lost';
	}
};
const playGame = () => {
	const userChoicve =
		getUserChoice('scissors');
	const computerChoice =
		getComputerChoice();
	console.log('You threw: ' + userChoice);
	console.log('The computer threw: ' + computerChoice);
};
