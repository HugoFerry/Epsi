using Microsoft.VisualStudio.TestTools.UnitTesting;
using AtelierStock;
using System;
using System.Collections.Generic;

namespace AtelierStockTest
{
    [TestClass]
    public class ProduitTest
    {
        private Produit NouveauProduit(
            string reference = "AT23", 
            string libelle = "Foo", 
            decimal prix = 100m, 
            decimal marge = 0.10m) 
            => new Produit(reference, libelle, prix, marge);
        
        #region Initialisation

        [TestMethod]
        public void InitialisationUsuelle()
        {
            // Arrange & act
            var test = NouveauProduit();

            // Assert
            Assert.AreEqual(0, test.Stocks);
            Assert.IsTrue(test.EstEnRupture); // préféré à Assert.AreEqual(true, test.EstEnRupture);
            Assert.AreEqual("AT23", test.Reference);
            Assert.AreEqual("Foo", test.Libelle);
            Assert.AreEqual(100m, test.PrixAchat);
            Assert.AreEqual(110m, test.PrixVente);
        }

        [TestMethod]
        public void InitialisationProduitSansMarge()
        {
            // Arrange & act
            var test = NouveauProduit(marge: 0m);

            // Assert
            Assert.AreEqual(0, test.Stocks);
            Assert.IsTrue(test.EstEnRupture);
            Assert.AreEqual("AT23", test.Reference);
            Assert.AreEqual("Foo", test.Libelle);
            Assert.AreEqual(100m, test.PrixAchat);
            Assert.AreEqual(100m, test.PrixVente);
        }

        [TestMethod]
        public void InitialisationAvecReferenceVide()
        {
            Action act = () => new Produit("", "Foo", 100m, 0.10m);

            Assert.ThrowsException<ArgumentException>(act);
        }
        [TestMethod]
        public void InitialisationAvecReferenceNulle()
        {
            Action act = () => new Produit(null, "Foo", 100m, 0.10m);

            Assert.ThrowsException<ArgumentNullException>(act);
        }
        [TestMethod]
        public void InitialisationAvecLibelleVide()
        {
            Action act = () => new Produit("AT23", "", 100m, 0.10m);

            Assert.ThrowsException<ArgumentException>(act);
        }
        [TestMethod]
        public void InitialisationAvecLibelleNul()
        {
            Action act = () => new Produit("AT23", null, 100m, 0.10m);

            Assert.ThrowsException<ArgumentNullException>(act);
        }
        [TestMethod]
        public void InitialisationAvecPrixDAchatAZero()
        {
            Action act = () => new Produit("AT23", "Foo", 0m, 0.10m);

            Assert.ThrowsException<ArgumentOutOfRangeException>(act);
        }
        [TestMethod]
        public void InitialisationAvecPrixDAchatNegatif()
        {
            Action act = () => new Produit("AT23", "Foo", -100m, 0.10m);

            Assert.ThrowsException<ArgumentOutOfRangeException>(act);
        }
        [TestMethod]
        public void InitialisationAvecMargeNegative()
        {
            Action act = () => new Produit("AT23", "Foo", 100m, -0.10m);

            Assert.ThrowsException<ArgumentOutOfRangeException>(act);
        }
        #endregion

        #region Rentrer
        [TestMethod]
        public void RentrerUneQuantiteEnStocks()
        {
            var test = new Produit("AT23", "Foo", 100m, 0.10m);

            test.Rentrer(15);

            Assert.AreEqual(15, test.Stocks);
            Assert.IsFalse(test.EstEnRupture);
        }

        [TestMethod]
        public void RentrerDeuxQuantitesEnStocks()
        {
            // Arrange
            var test = new Produit("AT23", "Foo", 100m, 0.10m);

            test.Rentrer(15);

            // Act
            test.Rentrer( 3);

            // Assert
            Assert.AreEqual(18, test.Stocks);
            Assert.IsFalse(test.EstEnRupture);
        }

        [TestMethod]
        public void RentrerUneQuantiteAZero()
        {
            var test = new Produit("AT23", "Foo", 100m, 0.10m);

            test.Rentrer(0);
        }

        [TestMethod]
        public void RentrerUneQuantiteNegative()
        {
            var test = new Produit("AT23", "Foo", 100m, 0.10m);

            test.Rentrer(15);

            test.Rentrer(-3);
        }
        #endregion

        #region Sortir
        [TestMethod]
        public void SortirUneQuantiteDesStocks()
        {
            var test = new Produit("AT23", "Foo", 100m, 0.10m);

            test.Rentrer(15);

            var qte = test.Sortir(2);

            Assert.AreEqual(2, qte);
            Assert.AreEqual(13, test.Stocks);
            Assert.IsFalse(test.EstEnRupture);
        }
        [TestMethod]
        public void SortirUneQuantiteDeStocksEnRupture()
        {
            var test = new Produit("AT23", "Foo", 100m, 0.10m);

            var qte = test.Sortir(2);

            Assert.AreEqual(0, qte);
            Assert.AreEqual(0, test.Stocks);
            Assert.IsTrue(test.EstEnRupture);
        }

        [TestMethod]
        public void SortirTropDeProduitsDesStocks()
        {
            var test = new Produit("AT23", "Foo", 100m, 0.10m);

            test.Rentrer(15);

            var qte = test.Sortir(20);

            Assert.AreEqual(15, qte);
            Assert.AreEqual(0, test.Stocks);
            Assert.IsTrue(test.EstEnRupture);
        }

        [TestMethod]
        public void SortirUneQuantiteAZero()
        {
            var test = new Produit("AT23", "Foo", 100m, 0.10m);

            test.Sortir(0);
        }

        [TestMethod]
        public void SortirUneQuantiteNegative()
        {
            var test = new Produit("AT23", "Foo", 100m, 0.10m);

            test.Rentrer(15);

            test.Sortir(-3);
        }
        #endregion
    }
}
