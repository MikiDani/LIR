import { Link } from "@inertiajs/react";

export default function Layout({children}) {
  return (
    <>
    <header>
      <nav>
        <Link preserveScroll className="nav-link" href="/">Home</Link>
        <Link preserveScroll href="/about">About</Link>
      </nav>
    </header>

    <main>
      {children}
    </main>
    </>
  );
}