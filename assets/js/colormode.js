(() => {
  'use strict';

  const storageKey = 'bnwp-theme';
  const oldStorageKey = 'theme';
  const getStoredTheme = () => localStorage.getItem(storageKey) || localStorage.getItem(oldStorageKey);
  const setStoredTheme = theme => localStorage.setItem(storageKey, theme);
  const prefersDark = () => window.matchMedia('(prefers-color-scheme: dark)').matches;

  const getPreferredTheme = () => {
    const storedTheme = getStoredTheme();
    if (storedTheme === 'light' || storedTheme === 'dark') return storedTheme;
    return prefersDark() ? 'dark' : 'light';
  };

  const setTheme = theme => {
    const resolved = theme === 'auto' ? (prefersDark() ? 'dark' : 'light') : theme;
    document.documentElement.setAttribute('data-bs-theme', resolved);
  };

  const showActiveTheme = (theme, focus = false) => {
    const switcher = document.querySelector('#colorModeTooglerBtn');
    if (!switcher) return;

    const resolved = theme === 'auto' ? getPreferredTheme() : theme;
    const activeIcon = document.querySelector('#theme-icon-active');
    const btnToActive = document.querySelector(`[data-bs-theme-value="${resolved}"]`);

    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
      element.classList.remove('active');
      element.setAttribute('aria-pressed', 'false');
    });

    if (btnToActive) {
      btnToActive.classList.add('active');
      btnToActive.setAttribute('aria-pressed', 'true');
      const icon = btnToActive.querySelector('i');
      if (icon && activeIcon) activeIcon.className = icon.className.replace('me-1', '').trim();
      switcher.setAttribute('aria-label', `Theme: ${resolved}`);
    }

    if (focus) switcher.focus();
  };

  setTheme(getPreferredTheme());

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    const storedTheme = getStoredTheme();
    if (storedTheme !== 'light' && storedTheme !== 'dark') setTheme(getPreferredTheme());
  });

  window.addEventListener('DOMContentLoaded', () => {
    const theme = getPreferredTheme();
    setTheme(theme);
    showActiveTheme(theme);

    document.querySelectorAll('[data-bs-theme-value]').forEach(toggle => {
      toggle.addEventListener('click', () => {
        const selected = toggle.getAttribute('data-bs-theme-value');
        setStoredTheme(selected);
        setTheme(selected);
        showActiveTheme(selected, true);
      });
    });
  });
})();
