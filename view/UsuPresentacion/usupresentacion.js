function toggleAccordion(header) {
  const content = header.nextElementSibling;
  const allContents = document.querySelectorAll('.accordion-content');

  // Cerrar otros paneles abiertos
  allContents.forEach(panel => {
    if (panel !== content) {
      panel.style.maxHeight = null;
    }
  });

  // Alternar el panel actual
  if (content.style.maxHeight) {
    content.style.maxHeight = null;
  } else {
    content.style.maxHeight = content.scrollHeight + "px";
  }
}
