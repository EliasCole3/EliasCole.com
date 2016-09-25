'use strict';

$(function () {

  // let result = abc.getSuccessCount(5, 3)
  // let probability = abc.getProbability(result)
  // console.log(probability)

  abc.go();
});

var abc = {

  go: function go() {
    for (var dicePool = 1; dicePool <= abc.maxDicePool; dicePool++) {
      // console.log(dicePool)
      for (var difficulty = abc.minDifficulty; difficulty <= abc.dieSize; difficulty++) {
        // console.log(difficulty)
        // console.log(abc.getProbability(abc.getSuccessCount(dicePool, difficulty)))

        var probability = abc.getProbability(abc.getSuccessCount(dicePool, difficulty));
        var result = abc.createResultObject(dicePool, difficulty, probability);
        console.log(result);
        console.log(abc.getProbability(abc.getSuccessCount(dicePool, difficulty)));
        console.log(abc.getProbabilityUnfixed(abc.getSuccessCount(dicePool, difficulty)));
        console.log(' ');

        $('body').append(abc.formatResult(result, '<br>'));
      }
    }
  },

  formatResult: function formatResult(result, linebreak) {
    var resultString = '';

    resultString += 'Dice pool: ' + result.dicePool + linebreak;
    resultString += 'Difficulty: ' + result.difficulty + linebreak;

    for (var prob in result.probability) {
      var percentage = +(result.probability[prob] * 100);
      resultString += 'Probability of ' + prob + ' successes: ' + Math.round(percentage) + '%' + linebreak;
    }

    resultString += linebreak;
    resultString += linebreak;

    return resultString;
  },

  createResultObject: function createResultObject(dicePool, difficulty, probability) {
    var result = {};

    result.dicePool = dicePool;
    result.difficulty = difficulty;
    result.probability = probability;

    return result;
  },

  getSuccessCount: function getSuccessCount(dicePool, difficulty) {

    var successCount = {};

    for (var i = 0; i <= dicePool; i++) {
      successCount[i] = 0;
    }

    // console.log('initializing successCount:')
    // console.log(successCount)

    for (var i = 0; i < abc.frequency; i++) {
      var roll = abc.generateRoll(dicePool);
      var successes = abc.getNumberOfSuccesses(difficulty, roll);
      successCount[successes]++;
    }

    // console.log('filled successCount:')
    // console.log(successCount)

    return successCount;
  },

  generateRoll: function generateRoll(numberOfDice) {
    var returnArray = [];

    for (var i = 0; i < numberOfDice; i++) {
      returnArray.push(abc.getRandomInt(1, abc.dieSize));
    }

    // console.log(returnArray)

    return returnArray;
  },

  getNumberOfSuccesses: function getNumberOfSuccesses(difficulty, roll) {
    var successes = 0;

    roll.forEach(function (die) {
      // console.log(`die: ${die}, difficulty: ${difficulty}, condition: ${(die >= difficulty)}`)
      if (die >= difficulty) {
        successes++;
      }
    });

    return successes;
  },

  getProbability: function getProbability(successCount) {
    var probability = {};

    for (var prop in successCount) {
      var original = +(successCount[prop] / abc.frequency);
      var fixed = original.toFixed(2);
      // console.log(`original: ${original}, fixed: ${fixed}`)
      probability[prop] = +(successCount[prop] / abc.frequency).toFixed(2);
    }

    return probability;
  },

  getProbabilityUnfixed: function getProbabilityUnfixed(successCount) {
    var probability = {};

    for (var prop in successCount) {
      probability[prop] = +(successCount[prop] / abc.frequency);
    }

    return probability;
  },

  /**
   *  Returns a random integer between min (inclusive) and max (inclusive) 
   *  Using Math.round() will give you a non-uniform distribution! 
   */
  getRandomInt: function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  },

  frequency: 100000,

  maxDicePool: 10,

  minDifficulty: 2,

  dieSize: 6
};
//# sourceMappingURL=js.js.map
