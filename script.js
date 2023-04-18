$(".dabba").click(function() {
    window.location = $(this).find("a").attr("href"); 
    return false;
  });

  const examDate = new Date('2023-04-24');

  // Get today's date
  const today = new Date();
  
  // Calculate the difference between today and the exam date in milliseconds
  const timeDiff = examDate.getTime() - today.getTime();
  
  // Calculate the number of days left until the exam
  const daysLeft = Math.ceil(timeDiff / (1000 * 3600 * 24));
  
  // Get the counter element by its ID
  const counterElement = document.getElementById('counter');
  
  // Make sure the counter element exists
  if (counterElement) {
    // Update the innerHTML of the counter element with the number of days left
    counterElement.innerHTML = daysLeft;
  } else {
    // If the counter element doesn't exist, log an error message to the console
    console.error('Counter element not found.');
  }