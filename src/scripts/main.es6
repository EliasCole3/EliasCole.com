Array.prototype.next = function() {
  let nextVal = this[++this.current]
  if(nextVal !== undefined) return nextVal
  this.current = 0
  return this[this.current]
}

Array.prototype.prev = function() {
  let prevValue = this[--this.current]
  if(prevValue !== undefined) return prevValue
  this.current = this.length - 1
  return this[this.current]
}

Array.prototype.current = 0



let config = {
  chosenOptions: {
    search_contains: true
  },
  kirbyInterval: 300
}

$(() => {

  $('#chosen-example').chosen(config.chosenOptions)

  $('#datetime-picker').datetimepicker({
    format: 'MM.DD.YY',
  })

  $('#title-change').click(e => {
    document.title = kirbyStates[0]
    setInterval(() => {
      document.title = kirbyStates.next()
    }, config.kirbyInterval)
  })

})

let kirbyStates = [
  '(>\'-\')>',
  '<(\'-\'<)',
  '^(\'-\')^',
  '<(^.^<)',
  '<(^.^)>',
  '(>^.^)> '
]