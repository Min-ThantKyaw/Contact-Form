function handleSubmit(event) {
  event.preventDefault();
  const form = document.getElementById("contactForm");
  const successBox = document.getElementById("successMessage");
  const submitBtn = form.querySelector("button");

  // Simulate loading state
  submitBtn.disabled = true;
  submitBtn.innerHTML =
    '<span>Sending...</span><i class="fas fa-circle-notch fa-spin"></i>';

  setTimeout(() => {
    // Hide form and show success
    form.classList.add("opacity-50", "pointer-events-none");
    successBox.classList.remove("hidden");

    // Reset button (just in case)
    submitBtn.innerHTML = '<span>Sent!</span><i class="fas fa-check"></i>';
    submitBtn.classList.replace("bg-indigo-600", "bg-green-600");
  }, 1500);
}
