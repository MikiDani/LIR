import { Link } from "@inertiajs/react";

export default function Layout({children}) {
  return (
    <div id="app-container" className="p-2">
      <header>
        <nav>
          <Link preserveScroll className="btn btn-secondary d-inline-block me-2" href="/">Home</Link>
          <Link preserveScroll className="btn btn-secondary d-inline-block me-2" href="/about">About</Link>
        </nav>
      </header>
      <main>
        {children}
      </main>
      <footer>
        <h6>menu1 | menu2</h6>
      </footer>
    </div>
  );
}