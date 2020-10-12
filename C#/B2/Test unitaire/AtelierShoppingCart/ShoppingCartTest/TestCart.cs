using Microsoft.VisualStudio.TestTools.UnitTesting;
using ShoppingCart;
using System;
using System.Linq;

namespace ShoppingCartTest
{
    [TestClass]
    public class TestCart
    {
        private Cart NewAddCart(string productName = "shoes",
                                int quantity = 5,
                                decimal price = 1.5m)
        {
            Cart test = new Cart();
            test.Add(productName, quantity, price);
            return test;
        }

        private void AssertArticles(Article [] articles, Cart test)
        {
            CollectionAssert.AreEqual(
                articles,
                test.Articles.ToList()
                );
        }

        private void Error<T>(Cart test, string productName, int quantity, decimal price) where T : Exception
        {
            Action man = () => test.Add(productName, quantity, price);

            Assert.ThrowsException<T>(man);
        }

        #region Initialisation
        [TestMethod]
        public void EmptyCart()
        {
            var test = new Cart();

            AssertArticles(new Article[] { }, test);
            Assert.IsTrue(test.IsEmpty);
            Assert.AreEqual(0m, test.TotalPrice);
        }

        [TestMethod]
        public void AddArticleUsuel()
        {
            var test = NewAddCart();

            AssertArticles(new Article[] { new Article("shoes", 5, 1.5m) }, test);
            Assert.IsFalse(test.IsEmpty);
            Assert.AreEqual(7.5m, test.TotalPrice);
        }

        [TestMethod]
        public void AddArticleQuantityZero()
        {
            var test = new Cart();

            Error<ArgumentOutOfRangeException>(test, "shoes", 0, 1.5m);
            Assert.IsTrue(test.IsEmpty);
            Assert.AreEqual(0m, test.TotalPrice);
        }

        [TestMethod]
        public void AddArticlePrixZero()
        {
            var test = new Cart();

            Error<ArgumentOutOfRangeException>(test, "shoes", 5, 0);
            Assert.IsTrue(test.IsEmpty);
            Assert.AreEqual(0m, test.TotalPrice);
        }

        [TestMethod]
        public void AddArticlePrixNegatif()
        {
            var test = new Cart();

            Error<ArgumentOutOfRangeException>(test, "shoes", 5, -2);
            Assert.IsTrue(test.IsEmpty);
            Assert.AreEqual(0m, test.TotalPrice);
        }

        [TestMethod]
        public void AddArticleEmptyName()
        {
            var test = new Cart();

            Error<ArgumentException>(test, "", 5, 1.5m);
            Assert.IsTrue(test.IsEmpty);
            Assert.AreEqual(0m, test.TotalPrice);
        }

        [TestMethod]
        public void AddArticleNullName()
        {
            var test = new Cart();

            Error<ArgumentNullException>(test, null, 5, 1.5m);
            Assert.IsTrue(test.IsEmpty);
            Assert.AreEqual(0m, test.TotalPrice);
        }
        #endregion

        #region Rentrer / sortir
        [TestMethod]
        public void AddExistingArticle()
        {
            var test = NewAddCart();
            test.Add("shoes", 10, 1.5m);

            AssertArticles(new Article[] { new Article("shoes", 15, 1.5m) }, test);
            Assert.IsFalse(test.IsEmpty);
            Assert.AreEqual(22.5m, test.TotalPrice);
        }

        [TestMethod]
        public void DecreaseQuantityUsuel()
        {
            var test = NewAddCart();

            test.DecreaseArticleQuantity("shoes");

            AssertArticles(new Article[] { new Article("shoes", 4, 1.5m) }, test);
            Assert.IsFalse(test.IsEmpty);
            Assert.AreEqual(6m, test.TotalPrice);
        }

        [TestMethod]
        public void DecreaseQuantityRemove()
        {
            var test = NewAddCart(quantity: 1);

            test.DecreaseArticleQuantity("shoes");

            Assert.IsTrue(test.IsEmpty);
            Assert.AreEqual(0m, test.TotalPrice);
        }

        [TestMethod]
        public void DecreaseQuantityNonExisting()
        {
            var test = NewAddCart();

            Action man = () => { test.DecreaseArticleQuantity("nonExistingProduct"); };
            Assert.ThrowsException<ArgumentOutOfRangeException>(man);
            Assert.IsFalse(test.IsEmpty);
            Assert.AreEqual(7.5m, test.TotalPrice);
        }
        #endregion

        /*#region Prix du panier
        [TestMethod]
        public void TotalPriceUsuel()
        {
            var test = NewAddCart();
            test.Add("bras", 2, 5.5m);

            Assert.AreEqual(18.5m, test.TotalPrice);
        }
        #endregion*/
    }
}
