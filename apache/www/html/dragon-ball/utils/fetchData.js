export const fecthURL = async (url) => {
  const res = await fetch(url);
  return res.json();
};

export const getURLPath = () => {
  const rawPathArr = window.location.pathname.split("/");
  const path = rawPathArr.slice(rawPathArr.length - 1)[0].split(".")[0];
  return path;
};
